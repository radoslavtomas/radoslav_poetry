<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index = App\Page::create([
        	'name' => 'Home page',
			'name_short' => 'home',
			'background' => '/img/index.jpg',
			'slide_color' => '#d8a5c4'
		]);

		$about = App\Page::create([
			'name' => 'About me',
			'name_short' => 'about',
			'background' => '/img/about.jpg',
			'slide_color' => '#1de9b6'
		]);

		$books = App\Page::create([
			'name' => 'Books',
			'name_short' => 'books',
			'background' => '/img/books.jpg',
			'slide_color' => '#ffa726'
		]);

		$links = App\Page::create([
			'name' => 'Links',
			'name_short' => 'links',
			'background' => '/img/links.jpg',
			'slide_color' => '#ba68c8'
		]);

		$contact = App\Page::create([
			'name' => 'Contact me',
			'name_short' => 'contact',
			'background' => '/img/contact.jpg',
			'slide_color' => '#ec407a'
		]);


    }
}
