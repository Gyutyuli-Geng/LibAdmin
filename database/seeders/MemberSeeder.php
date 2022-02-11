<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'name'=>'Para Zita',
            'address'=>'Pitypang utca 1',
            'type'=>'1',
            'phone'=>'36-30-000-0001',
            'email'=>'nagyonjo1@email.ez',
        ]);
        DB::table('members')->insert([
            'name'=>'Am Erika',
            'address'=>'Pitypang utca 2',
            'type'=>'2',
            'phone'=>'36-30-000-0002',
            'email'=>'nagyonjo2@email.ez',
        ]);
        DB::table('members')->insert([
            'name'=>'Külö Nóra',
            'address'=>'Puki utca 3',
            'type'=>'3',
            'phone'=>'36-30-000-0003',
            'email'=>'nagyonjo3@email.ez',
        ]);
        DB::table('members')->insert([
            'name'=>'Koaxk Ábel',
            'address'=>'Puki utca 4',
            'type'=>'4',
            'phone'=>'36-30-000-0004',
            'email'=>'nagyonjo4@email.ez',
        ]);

    }
}
