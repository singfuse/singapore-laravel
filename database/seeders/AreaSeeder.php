<?php

namespace Vinkas\Singapore\Database\Seeders;

use Illuminate\Database\Seeder;
use Vinkas\Singapore\Facade as Singapore;
use Vinkas\Singapore\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::insert(Singapore::areas());
    }
}
