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
		$names = Page::all('name_short');

		foreach( $names as $index=>$name )
		{
			$short_name = 'bg_'.$name->name_short;
			if($request->hasFile($short_name))
			{
				$request->validate([
					$short_name => 'image'
				]);
				$bg = $request->$short_name;
				$bg_new_name = time().$bg->getClientOriginalName();
				$bg->move('uploads/backgrounds/', $bg_new_name);
				$link = $pages->where('name_short', $name->name_short);
				$link[$index]->background = '/uploads/backgrounds/'.$bg_new_name;
				$link[$index]->save();
			}
		}

		Session::flash('success', 'Backgrounds and colors were successfully updated');

		return redirect()->route('getBackgrounds');

	}
}
