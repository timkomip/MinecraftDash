<?php namespace App\Http\Controllers;

use App\Models\MinecraftServer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlayersController extends Controller {

    protected $server;

    public function __construct(MinecraftServer $server) {
        $this->server = $server;
    }

    public function index() {
        $players = $this->server->currentPlayers();
        return ['playerCount' => $players->count(), 'players' => $players];
    }
}
