<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users() as $user) User::create($user);
    }
    
    public function users(){
    	return [
    		[
				'name' => 'User 1',
				'email' => "a@a.com",
				'email_verified_at' => now(),
				'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
				'remember_token' => str_random(10),
			],
			[
				'name' => 'User 2',
				'email' => "b@b.com",
				'email_verified_at' => now(),
				'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
				'remember_token' => str_random(10),
			]
		];
	}
}
