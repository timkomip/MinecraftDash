<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use App\Gateways\RCONGateway;

class MinecraftServer
{
    protected $gateway;

    public function __construct(RCONGateway $gateway) {
        $this->gateway = $gateway;
    }

    public function currentPlayers() {
        $response = $this->gateway->command('list');
        $namelist = explode(':',trim($response))[1];
        return new Collection($this->splitNames($namelist));
    }

    private function splitNames($namelist) {
        return strlen($namelist) ? explode(',', $namelist) : [];
    }
}
