<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class PagesController extends Controller
{
	public function index()
	{
		if ( App::getLocale() == 'en' )
		{
			$user = User::first();
			$name = $user->name;
			$occupation = $user->profile->occupation;
			return view('pages.index')
				->with('name', $name)
				->with('occupation', $occupation);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$user = User::first();
			$name = $user->profile->name_sk;
			$occupation = $user->profile->occupation_sk;
			return view('pages.index')
				->with('name', $name)
				->with('occupation', $occupation);
		}
    }

	public function about()
	{
		if ( App::getLocale() == 'en' )
		{
			$user = User::first();
			$about = $user->profile->about;
			return view('pages.about')
				->with('about', $about);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$user = User::first();
			$about = $user->profile->about_sk;
			return view('pages.about')
				->with('about', $about);
		}
	}

	public function books()
	{
		return view('pages.books');
	}

	public function links()
	{
		if ( App::getLocale() == 'en' )
		{
			$linksAll = Link::all()->first();
			$links = $linksAll->links;
			$video = $linksAll->video;

			return view('pages.links')
				->with('links', $links)
				->with('video', $video);
		}
		elseif ( App::getLocale() == 'sk' )
		{
			$linksAll = Link::all()->first();
			$links = $linksAll->links_sk;
			$video = $linksAll->video_sk;

			return view('pages.links')
				->with('links', $links)
				->with('video', $video);
		}

	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function book()
	{
		return view('pages.book');
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
