<?php

namespace Vinkas\Singapore;

use Vinkas\Singapore\Api\Connector;
use Vinkas\Singapore\Data\Areas;
use Vinkas\Singapore\Data\Regions;
use Vinkas\Singapore\Data\Subzones;

class Singapore
{
    protected Connector $apiConnector;

    public function __construct()
    {
        $this->apiConnector = new Connector;
    }

    public function api(): Connector
    {
        return $this->apiConnector;
    }

    public function regions(): array
    {
        return Regions::all();
    }

    public function areas(): array
    {
        return Areas::all();
    }

    public function subzones(): array
    {
        return Subzones::all();
    }
}
