<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
