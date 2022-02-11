<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Soós Sándor',
            'email'=>'sanyika@sanyika.sanyika',
            'password'=>'$2y$10$ZWQqXzrP5RqH8nhrjBGIxOpguo6o7fW5yzJfwAZYV38V9AsEKU67q',
        ]);
    }
}
