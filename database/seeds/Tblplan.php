<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Tblplan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblplan')->insert([
            'tblplannomb'  => 'BASICO',
            'tblplandesc'  => 'BASICO DESCRIPCION DE EJEMPLO',
            'tblplancost'  => 12.50,
            'tblplanprdo'  => 3,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblplan')->insert([
            'tblplannomb'  => 'INTERMEDIO',
            'tblplandesc'  => 'INTERMEDIO DESCRIPCION DE EJEMPLO',
            'tblplancost'  => 22.50,
            'tblplanprdo'  => 6,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblplan')->insert([
            'tblplannomb'  => 'EXPERTO',
            'tblplandesc'  => 'EXPERTO DESCRIPCION DE EJEMPLO',
            'tblplancost'  => 59.99,
            'tblplanprdo'  => 12,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
    }
}
