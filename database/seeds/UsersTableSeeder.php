<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,100)->create();
        App\User::create([
            'name'=>'user',
            'email'=>'user@example.com',
            'password'=>bcrypt('1234')
        ]);
    }
}
