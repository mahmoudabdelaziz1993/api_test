<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Factory(App\User::class,50)->create();
        Factory(App\Post::class,50)->create();
        Factory(App\Review::class,50)->create();
    }
}
