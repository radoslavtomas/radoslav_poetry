<?php

namespace App\Http\Controllers;

use App\Book;
use App\Link;
use App\Page;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

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
			$settings = Page::all()->first();
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
			$settings = Page::all()->first();
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
			$settings = Page::all()->first();
			$about = $user->profile->about;
			return view('pages.about')
				->with('about', $about)
				->with('settings', $settings);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$user = User::first();
			$settings = Page::all()->first();
			$about = $user->profile->about_sk;
			return view('pages.about')
				->with('about', $about)
				->with('settings', $settings);
		}
	}

	public function books()
	{
		$books = Book::all();
		$settings = Page::all()->first();
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
			$settings = Page::all()->first();

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
			$settings = Page::all()->first();

			return view('pages.links')
				->with('links', $links)
				->with('video', $video)
				->with('settings', $settings);
		}

	}

	public function contact()
	{
		$settings = Page::all()->first();
		return view('pages.contact')
			->with('settings', $settings);
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
