<?php

namespace Vinkas\Singapore\Support;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\Facades\Config;

class Model extends EloquentModel
{
    /**
     * Get the current connection name for the model.
     *
     * @return string
     */
    public function getConnectionName()
    {
        return Config::get('singapore.storage.database.connection');
    }
}
