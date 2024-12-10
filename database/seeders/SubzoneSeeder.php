<?php

namespace Vinkas\Singapore\Database\Seeders;

use Illuminate\Database\Seeder;
use Vinkas\Singapore\Facade as Singapore;
use Vinkas\Singapore\Models\Subzone;

class SubzoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subzone::insert(Singapore::subzones());
    }
}
