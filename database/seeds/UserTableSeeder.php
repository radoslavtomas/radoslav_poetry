<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$user = App\User::create([
			'name' => 'Radoslav Tomas',
			'email' => 'radoslav.tomas@gmail.com',
			'password' => bcrypt('password')
		]);

		App\Profile::create([
			'user_id' => $user->id,
			'occupation' => 'Poet',
			'about' => 'Originally from Slovakia, I currently live in Liverpool, UK. I studied journalism but poetry has always been a way of expressing that suited me the most.

My latest book so far was published in 2011, it’s called Status reports (Statusové hlásenia) and it is an outcome of an exciting play with poetry, identities and social networks.

In 2009 I published Wolves\' weddings (Vlčie svadby) based on stories from mythology. My first book A boy (Chlapec) is from 2005 and received literary prize for first-published poets in Slovakia – the Ivan Krasko Prize.

Many of my poems were translated into English, German, Hungarian, Czech and Polish. Selection of my poetry appeared in 5x5 (an anthology of modern Slovak poetry). These days I work as a data analyst and I also help people with learning disabilities in L’Arche.',
			'facebook' => 'https://www.facebook.com/radoslav.tomas',
			'skype' => 'radoslav.tomas'
		]);
    }
}
