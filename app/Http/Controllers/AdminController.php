<?php

namespace App\Http\Controllers;

use App\Link;
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
			'home' => 'required|string',
			'about' => 'required|string',
			'books' => 'required|string',
			'links' => 'required|string',
			'contact' => 'required|string',
		]);

		$pages = Page::all();
		$names = Page::all('name_short');

		foreach ( $names as $name )
		{
			// manage updating slide_colors
			$page = $pages->where('name_short', $name->name_short)->first();
			$page_string = $name->name_short;
			$page->slide_color = $request->$page_string;
			$page->save();

			// manage updating background images
			$query_name = 'bg_'.$name->name_short;
			if($request->hasFile($query_name))
			{
				$request->validate([
					$query_name => 'image'
				]);
				$bg = $request->$query_name;
				$bg_new_name = time().$bg->getClientOriginalName();
				$bg->move('uploads/backgrounds/', $bg_new_name);
				$bg_page = $pages->where('name_short', $name->name_short)->first();
				$bg_page->background = '/uploads/backgrounds/'.$bg_new_name;
				$bg_page->save();
			}
		}

		Session::flash('success', 'Backgrounds and colors were successfully updated');
		return redirect()->route('getBackgrounds');
	}

	public function getLinks()
	{
		$links = Link::all()->first();
		return view('admin.links')
			->with('links', $links);
	}

	public function postLinks(Request $request)
	{
		$request->validate([
			'links' => 'required|string',
			'links_sk' => 'required|string',
			'video' => 'required|string',
			'video_sk' => 'required|string',
		]);

		$links = Link::all()->first();

		$links->links = $request->links;
		$links->links_sk = $request->links_sk;
		$links->video = $request->video;
		$links->video_sk = $request->video_sk;

		$links->save();

		Session::flash('success', 'Links have been successfully updated');
		return redirect()->route('getLinks');
	}
}
