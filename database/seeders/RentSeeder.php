<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rents')->insert([
            'isbn'=>'9786150068404',
            'active'=>'1',
            'user_id'=>'1',
            'start'=>'2022-01-22',
            'end'=>'2022-03-22',
        ]);
        DB::table('rents')->insert([
            'isbn'=>'9786150124032',
            'active'=>'0',
            'user_id'=>'1',
            'start'=>'2022-01-22',
            'end'=>'2022-03-22',
        ]);
        DB::table('rents')->insert([
            'isbn'=>'9786155186813',
            'active'=>'1',
            'user_id'=>'1',
            'start'=>'2022-01-22',
            'end'=>'2022-03-22',
        ]);   
        DB::table('rents')->insert([
            'isbn'=>'9786155281358',
            'active'=>'1',
            'user_id'=>'2',
            'start'=>'2022-01-22',
            'end'=>'2022-03-22',
        ]);    
    }
}
