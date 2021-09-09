<?php

use Illuminate\Database\Seeder;

class Tbluspl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbluspl')->insert([
            'tblplancdgo'  => 3,
            'tblusrocdgo'  => 2,
            'tblusplflag'  => 'A',
            'tblusplfech'  => '2021-09-07'
        ]);
    }
}
