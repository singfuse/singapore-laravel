<?php

namespace Vinkas\Singapore\Database\Seeders;

use Illuminate\Database\Seeder;
use Vinkas\Singapore\Facade as Singapore;
use Vinkas\Singapore\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::insert(Singapore::regions());
    }
}
