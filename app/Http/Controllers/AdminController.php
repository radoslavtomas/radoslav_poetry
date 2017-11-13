<?php

namespace App\Http\Controllers;

use App\Page;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getDashboard()
	{
		return view('admin.dashboard');
	}

	public function getProfile()
	{
		$user = User::first();
		return view('admin.profile')
			->with('user', $user);
	}

	public function postProfile(Request $request)
	{
		$request->validate([
			'name' => 'required|string',
			'name_sk' => 'required|string',
			'email' => 'required|string|email|max:255',
			'occupation' => 'required|string',
			'occupation_sk' => 'required|string',
			'about' => 'required|string',
			'about_sk' => 'required|string',
			'facebook' => 'required|string|url',
			'skype' => 'required|string',
		]);

		$user = User::first();

		if($request->password !== null)
		{
			$request->validate([
				'password' => 'string|min:6'
			]);
			$user->password = bcrypt($request->password);
		}

		$user->name = $request->name;
		$user->email = $request->email;

		$profile = $user->profile;

		$profile->about = $request->about;
		$profile->about_sk = $request->about_sk;
		$profile->occupation = $request->occupation;
		$profile->occupation_sk = $request->occupation_sk;
		$profile->facebook = $request->facebook;
		$profile->skype = $request->skype;

		$user->save();
		$profile->save();

		Session::flash('success', 'Your profile has been successfully updated.');

		return redirect()->route('getProfile');
	}

	public function getBackgrounds()
	{
		$pages = Page::all();
		return view('admin.backgrounds')
			->with('pages', $pages);
	}

	public function postBackgrounds(Request $request)
	{
		$request->validate([
			'slide_color_home' => 'required|string',
			'slide_color_about' => 'required|string',
			'slide_color_books' => 'required|string',
			'slide_color_links' => 'required|string',
			'slide_color_contact' => 'required|string',
		]);

		$pages = Page::all();

		if($request->hasFile('bg_home'))
		{
			$request->validate([
				'bg_home' => 'image'
			]);
			$bg_home = $request->bg_home;
			$bg_home_new_name = time().$bg_home->getClientOriginalName();
			$bg_home->move('uploads/backgrounds/', $bg_home_new_name);
			$post->featured_image = 'uploads/posts/'.$featured_image_new_name;
		}
	}
}
