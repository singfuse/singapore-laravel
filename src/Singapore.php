<?php

namespace Vinkas\Singapore;

use Carbon\Carbon;
use Vinkas\Singapore\Api\Connector;
use Vinkas\Singapore\Data\Areas;
use Vinkas\Singapore\Data\PostalDistricts;
use Vinkas\Singapore\Data\Regions;
use Vinkas\Singapore\Data\Subzones;

class Singapore
{
    protected Connector $apiConnector;

    public function __construct()
    {
        $this->apiConnector = new Connector;
    }

    public function now(): Carbon
    {
        return Carbon::now('Asia/Singapore');
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

    public function postalDistricts(): array
    {
        return PostalDistricts::all();
    }
}
