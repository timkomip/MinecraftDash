<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Player
{
    public static function all() {
        $query = \App::make( 'minecraft.query' );
        $query->connect($_ENV['MINECRAFT_IP'],$_ENV['MINECRAFT_PORT']);
        $players = $query->GetPlayers();
        if (!$players) {
            $players = [];
        }

        return new Collection($players);
    }
}
