<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Tblctga::class);
        $this->call(Tblusro::class);
        $this->call(Tblplan::class);
    }
}
