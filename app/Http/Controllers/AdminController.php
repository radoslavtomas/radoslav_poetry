<?php

namespace App\Http\Controllers;

use App\Book;
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

	/**
	 * Show the application page for updating profile.
	 *
	 * @return $this
	 */
	public function getProfile()
	{
		$user = User::first();
		return view('admin.profile')
			->with('user', $user);
	}

	/**
	 * Update application profile page
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
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

	/**
	 * Show the application page for managing backgrounds and slide colors.
	 *
	 * @return $this
	 */
	public function getBackgrounds()
	{
		$pages = Page::all();
		return view('admin.backgrounds')
			->with('pages', $pages);
	}

	/**
	 * Update application backgrounds and slide colors
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
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

	/**
	 * Show the application page for managing links
	 *
	 * @return $this
	 */
	public function getLinks()
	{
		$links = Link::all()->first();
		return view('admin.links')
			->with('links', $links);
	}

	/**
	 * Update links and videos
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
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

	/**
	 *
	 */
	public function getBooks()
	{
		$books = Book::all();
		return view('admin.books.books')
			->with('books', $books);
	}

	public function getBook($id)
	{
		$book = Book::findOrFail($id);
		return view('admin.books.edit')
			->with('book', $book);
	}

	public function addBook()
	{
		return view('admin.books.create');
	}

	public function putBookUpdate(Request $request, $id)
	{
		$request->validate([
			'name' => 'string|required',
			'name_sk' => 'string|required',
			'slug' => 'string|required',
			'description' => 'string|required',
			'description_sk' => 'string|required',
			'meta' => 'string|required',
			'meta_sk' => 'string|required',
			'poems_sk' => 'string|required',
			'slide_color' => 'string|required',
			'year' => 'string|required',
		]);

		$book = Book::findOrFail($id);

		if($request->hasFile('download'))
		{
			$request->validate([
				'download' => 'file|mimes:pdf'
			]);
			$download = $request->download;
			$download_new_name = time().$download->getClientOriginalName();
			$download->move('uploads/downloads/', $download_new_name);
			$book->download = '/uploads/downloads/'.$download_new_name;
		}

		if($request->hasFile('cover'))
		{
			$request->validate([
				'cover' => 'image'
			]);
			$cover = $request->cover;
			$cover_new_name = time().$cover->getClientOriginalName();
			$cover->move('uploads/covers/', $cover_new_name);
			$book->cover = '/uploads/covers/'.$cover_new_name;
		}

		if($request->hasFile('background'))
		{
			$request->validate([
				'background' => 'image'
			]);
			$background = $request->background;
			$background_new_name = time().$background->getClientOriginalName();
			$background->move('uploads/backgrounds/', $background_new_name);
			$book->background = '/uploads/backgrounds/'.$background_new_name;
		}

		if($request->poems != '' || $request->poems != null)
		{
			$request->validate([
				'poems' => 'string'
			]);
			$book->poems = $request->poems;
		}

		if($request->buy != '' || $request->buy != null)
		{
			$request->validate([
				'buy' => 'string'
			]);
			$book->buy = $request->buy;
		}

		$book->name = $request->name;
		$book->name_sk = $request->name_sk;
		$book->slug = $request->slug;
		$book->description = $request->description;
		$book->description_sk = $request->description_sk;
		$book->meta = $request->meta;
		$book->meta_sk = $request->meta_sk;

		$book->poems_sk = $request->poems_sk;
		$book->buy = $request->buy;
		$book->slide_color = $request->slide_color;
		$book->year = $request->year;

		$book->save();

		Session::flash('success', 'The book has been successfully updated.');

		return redirect()->route('getBook', [$book->id]);
	}

	public function postBookCreate(Request $request)
	{
		$request->validate([
			'name' => 'string|required',
			'name_sk' => 'string|required',
			'slug' => 'string|required',
			'description' => 'string|required',
			'description_sk' => 'string|required',
			'meta' => 'string|required',
			'meta_sk' => 'string|required',
			'poems_sk' => 'string|required',
			'slide_color' => 'string|required',
			'year' => 'string|required',
			'cover' => 'image|required',
			'background' => 'image|required'
		]);

		$book = Book::create([
			'name' => $request->name,
			'name_sk' => $request->name_sk,
			'slug' => $request->slug,
			'description' => $request->description,
			'description_sk' => $request->description_sk,
			'meta' => $request->meta,
			'meta_sk' => $request->meta_sk,
			'poems_sk' => $request->poems_sk,
			'slide_color' => $request->slide_color,
			'year' => $request->year,
			'cover' => '',
			'background' => ''
		]);

		$cover = $request->cover;
		$cover_new_name = time().$cover->getClientOriginalName();
		$cover->move('uploads/covers/', $cover_new_name);
		$book->cover = '/uploads/covers/'.$cover_new_name;


		$background = $request->background;
		$background_new_name = time().$background->getClientOriginalName();
		$background->move('uploads/backgrounds/', $background_new_name);
		$book->background = '/uploads/backgrounds/'.$background_new_name;

		if($request->poems != '' || $request->poems != null)
		{
			$request->validate([
				'poems' => 'string'
			]);
			$book->poems = $request->poems;
		}

		if($request->buy != '' || $request->buy != null)
		{
			$request->validate([
				'buy' => 'string'
			]);
			$book->buy = $request->buy;
		}

		if($request->hasFile('download'))
		{
			$request->validate([
				'download' => 'file|mimes:pdf'
			]);
			$download = $request->download;
			$download_new_name = time().$download->getClientOriginalName();
			$download->move('uploads/downloads/', $download_new_name);
			$book->download = '/uploads/downloads/'.$download_new_name;
		}

		$book->save();

		Session::flash('success', 'The book has been successfully added.');

		return redirect()->route('getBook', [$book->id]);
	}

	public function deleteBook($id)
	{
		Book::destroy($id);

		Session::flash('success', 'The book has been deleted.');

		return redirect()->route('getBooks');
	}
}
