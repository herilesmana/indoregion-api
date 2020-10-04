<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use AzisHapidin\IndoRegion\RawDataGetter;

class IndoRegionRegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     *
     * @return void
     */
    public function run()
    {
        // Get Data
        $regencies = RawDataGetter::getRegencies();

        // Insert Data to Database
        DB::table('indoregion_regencies')->insert($regencies);
    }
}
