<?php

use Illuminate\Database\Seeder;

class AthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Author::class,100)->create();
    }
}
