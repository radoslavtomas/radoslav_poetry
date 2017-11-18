<?php

namespace App\Http\Controllers;

use App\Book;
use App\Link;
use App\Mail\ContactForm;
use App\Page;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
	public function __construct()
	{

	}

	public function index()
	{
		if ( App::getLocale() == 'en' )
		{
			$user = User::first();
			$settings = Page::where('name_short', 'home')->first();
			$name = $user->name;
			$occupation = $user->profile->occupation;
			return view('pages.index')
				->with('name', $name)
				->with('occupation', $occupation)
				->with('settings', $settings);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$user = User::first();
			$settings = Page::where('name_short', 'home')->first();
			$name = $user->profile->name_sk;
			$occupation = $user->profile->occupation_sk;
			return view('pages.index')
				->with('name', $name)
				->with('occupation', $occupation)
				->with('settings', $settings);
		}
    }

	public function about()
	{
		if ( App::getLocale() == 'en' )
		{
			$user = User::first();
			$settings = Page::where('name_short', 'about')->first();
			$about = $user->profile->about;
			return view('pages.about')
				->with('about', $about)
				->with('settings', $settings);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$user = User::first();
			$settings = Page::where('name_short', 'about')->first();
			$about = $user->profile->about_sk;
			return view('pages.about')
				->with('about', $about)
				->with('settings', $settings);
		}
	}

	public function books()
	{
		$books = Book::all()->sortByDesc('year');
		$settings = Page::where('name_short', 'books')->first();
		return view('pages.books')
			->with('books', $books)
			->with('settings', $settings);
	}

	public function book($slug)
	{
		$book = Book::where('slug', $slug)->firstOrFail();
		$books = Book::all()->whereNotIn('slug', $slug);
		return view('pages.book')
			->with('book', $book)
			->with('books', $books);
	}

	public function links()
	{
		if ( App::getLocale() == 'en' )
		{
			$linksAll = Link::all()->first();
			$links = $linksAll->links;
			$video = $linksAll->video;
			$settings = Page::where('name_short', 'links')->first();

			return view('pages.links')
				->with('links', $links)
				->with('video', $video)
				->with('settings', $settings);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$linksAll = Link::all()->first();
			$links = $linksAll->links_sk;
			$video = $linksAll->video_sk;
			$settings = Page::where('name_short', 'links')->first();

			return view('pages.links')
				->with('links', $links)
				->with('video', $video)
				->with('settings', $settings);
		}

	}

	public function contact()
	{
		$settings = Page::where('name_short', 'links')->first();
		return view('pages.contact')
			->with('settings', $settings);
	}

	public function postContact(Request $request)
	{
		$request->validate([
		'name' => 'required',
		'email' => 'email|required',
		'message' => 'required'
	]);

		$data = array(
			'email' => $request->email,
			'name' => $request->name,
			'body_message' => $request->message
		);

		Mail::to('radoslav.tomas@gmail.com')
			->send(new ContactForm($data));

		Session::flash('success', 'Your message has been successfully sent.');

		return redirect()->route('contact');
	}

	public function setLanguage($lang)
	{
		if (array_key_exists($lang, Config::get('language')) )
		{
			session(['applocale' => $lang]);
		}

		return redirect()->back();
	}
}
