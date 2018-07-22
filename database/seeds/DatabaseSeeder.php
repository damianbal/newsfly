<?php

use Illuminate\Database\Seeder;

use App\User;
use Illuminate\Support\Facades\Hash;
use App\Post;
use App\Subscriber;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Create first user
       $user = User::create([
            'name' => 'SomeCoolUser',
            'email' => 'test@test.com',
            'password' => Hash::make('somecooluser'),
            'description' => 'News about Cool stuff',
        ]);

        // create post for that user
        Post::create([
            'title' => 'Welcome!',
            'content' => 'Welcome to Newsfly!',
            'user_id' => $user->id,
        ]);

        // add subscriber for that user
        Subscriber::create(
            [
                'email' => 'damianparowka2015@gmail.com',
                'user_id' => $user->id
            ]
        );
        
    }
}
