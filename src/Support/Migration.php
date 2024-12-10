<?php

namespace Vinkas\Singapore\Support;

use Illuminate\Database\Migrations\Migration as BaseMigration;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Migration extends BaseMigration
{
    /**
     * Get the migration connection name.
     */
    public function getConnection(): ?string
    {
        return Config::get('singapore.storage.database.connection');
    }

    /**
     * Get the database connection driver.
     */
    protected function driver(): string
    {
        return DB::connection($this->getConnection())->getDriverName();
    }
}
