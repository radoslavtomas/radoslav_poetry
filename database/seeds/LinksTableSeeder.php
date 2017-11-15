<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Link::create([
			'links' => 'sme.sk - To, že rozmýšľam nad básňami, zo mňa nerobí lepšieho človeka

bookportrait.sk - Strážay v interiéri Radoslava Tomáša

CIL - Profile in The Centre for Information on Literature

martinus.sk - Poézia nie je zisková, je to záležitosť menšiny',
			'links_sk' => 'sme.sk - To, že rozmýšľam nad básňami, zo mňa nerobí lepšieho človeka

bookportrait.sk - Strážay v interiéri Radoslava Tomáša

CIL - Profile in The Centre for Information on Literature

martinus.sk - Poézia nie je zisková, je to záležitosť menšiny',
			'video' => '<iframe width="482" height="270" border="0" frameborder="0" scrolling="no" style="padding:0px; margin:0px; border: 0px;" src="//www.sme.sk/vp/17238/" allowFullScreen></iframe>',
			'video_sk' => '<iframe width="482" height="270" border="0" frameborder="0" scrolling="no" style="padding:0px; margin:0px; border: 0px;" src="//www.sme.sk/vp/17238/" allowFullScreen></iframe>'
		]);
    }
}
