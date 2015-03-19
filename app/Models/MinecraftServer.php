<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use jyc\rcon\Rcon;

class MinecraftServer
{
    public function currentPlayers() {
        $r = new Rcon($_ENV['MC_RCON_IP'], intval($_ENV['MC_RCON_PORT']), $_ENV['MC_RCON_PASSWORD'], 5, 5, 5000);

        $r->connect();
        $response = $r->command("list");
        $r->disconnect();
        $namelist = explode(':',trim($response))[1];
        if(!strlen($namelist)) {
            $names = [];
        } else {
            $names = explode(',', $namelist);
        }
        return new Collection($names);
    }
}
