<?php

namespace Vinkas\Singapore\Database\Seeders;

use Illuminate\Database\Seeder;
use Vinkas\Singapore\Facade as Singapore;
use Vinkas\Singapore\Models\PostalDistrict;

class PostalDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(Singapore::postalDistricts())->each(function ($postalDistrict) {
            PostalDistrict::create($postalDistrict);
        });
    }
}
