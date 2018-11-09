<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Seeds 30 Fake Users to your Database
        factory(App\User::class, 30)->create();

        //Seeds 100 Posts to your database
        factory(App\Post::class, 100)->create();
    }
}
