<?php

namespace App\Gateways;

use jyc\rcon\Rcon;

class RCONGateway
{
    public function command($command) {
        $r = new Rcon(
            $_ENV['MC_RCON_IP'],
            intval($_ENV['MC_RCON_PORT']),
            $_ENV['MC_RCON_PASSWORD'],
            5, 5, 5000);

        $r->connect();
        $response = $r->command($command);
        $r->disconnect();
        return $response;
    }
}
