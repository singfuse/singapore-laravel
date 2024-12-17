<?php

namespace Vinkas\Singapore\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RegionSeeder::class,
            AreaSeeder::class,
            SubzoneSeeder::class,
            PostalDistrictSeeder::class,
        ]);
    }
}
