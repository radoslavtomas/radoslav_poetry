<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PagesController extends Controller
{
	public function index()
	{
		return view('pages.index');
    }

	public function about()
	{
		return view('pages.about');
	}

	public function books()
	{
		return view('pages.books');
	}

	public function links()
	{
		return view('pages.links');
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
