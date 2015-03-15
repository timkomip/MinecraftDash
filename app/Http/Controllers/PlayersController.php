<?php namespace App\Http\Controllers;

use App\Models\Player;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlayersController extends Controller {
    public function index() {
        $players = Player::all();
        return ['playerCount' => $players->count(), 'players' => $players];
    }
}
