<?php

namespace Database\Seeders;

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
        $this->addUsers();
        $this->addPosts();
    }
    /**
     * Add user
     */
    public function addUsers(): void
    {
        \DB::table('users')->delete();
        \App\Models\User::create(['email' => 'user@gmail.com', 'password' => '123456']);
        \App\Models\User::factory(5)->create();

    }
    public function addPosts(): void
    {
        \DB::table('posts')->delete();
        \App\Models\Post::factory(40)->create();
        
    }
}
