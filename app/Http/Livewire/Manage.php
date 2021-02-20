<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\Team;
use Livewire\Component;

class Manage extends Component
{
    public $players;
    public $teams;

    public function render()
    {
        return view('livewire.manage', [
            'players' => $this->players,
            'teams'   => $this->teams
        ]);
    }

    public function mount()
    {
        $this->players = Player::orderBy('name', 'asc')->get();
        $this->teams   = Team::orderBy('name', 'asc')->get();
    }
}
