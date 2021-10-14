<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Tblctga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN CÍVICA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'ANATOMÍA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'BIOLOGÍA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'BOTANICA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'ECOLOGIA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN CÍVICA, SALUD Y SEXUALIDAD',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN FISICA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN INICIAL ',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN POR EL ARTE',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN POR EL ARTE, PERSONAJES ILUSTRES',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN RELIGIOSA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'EDUCACIÓN RELIGIOSA, PERSONAJES ILUSTRES',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'FÍSICA Y QUÍMICA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'GEOGRAFÍA DEL PERÚ',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'GEOGRAFÍA DEL UNIVERSAL Y DEL MUNDO',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'HISTORIA DEL PERÚ',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'HISTORIA DEL PERÚ, PERSONAJES ILUSTRES',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'HISTORIA UNIVERSAL',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'LENGUAJE Y LITERATURA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'LENGUAJE Y LITERATURA, PERSONAJES ILUSTRES',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'LÓGICO MATEMÁTICO',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'OBRAS LITERARIAS',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'PERSONAJES ILUSTRES',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'PERSONAJES ILUSTRES, PERSONAJES ILUSTRES',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'SALUD Y SEXUALIDAD',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
        DB::table('tblctga')->insert([
            'tblctgadesc'  => 'ZOOLOGÍA',
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
    }
}
