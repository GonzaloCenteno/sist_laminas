<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Tblusro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblusro')->insert([
            'tblusronomb'   => 'GONZALO JAVIER CENTENO ZAPATA',
            'email'         => 'gzlcentenoz@gmail.com',
            'password'      => Hash::make('123456789'),
            'tblusrotipo'   => 'ADM',
            'created_at'    => Carbon::now(),
            'updated_at' 	=> Carbon::now()
        ]);

        DB::table('tblusro')->insert([
            'tblusronomb'   => 'SARA DAYSI RIVEROS CRUZ',
            'email'         => 'sriveros@gmail.com',
            'password'      => Hash::make('123456789'),
            'tblusrotipo'   => 'USR',
            'created_at' 	=> Carbon::now(),
            'updated_at' 	=> Carbon::now()
        ]);
    }
}
