<?php

namespace App\Http\Livewire;

use App\Models\Player as ModelsPlayer;
use Livewire\Component;

class Player extends Component
{
    public $player;
    public $teams;
    public $points;
    public $team;

    public function mount($player, $teams)
    {
        $this->player = $player;
        $this->teams  = $teams;
        $this->points = $player->points ?: null;
        $this->team   = $player->team_id ?: 0;
    }

    public function updatedPoints()
    {
        ModelsPlayer::whereId($this->player->id)->update(['points' => $this->points ?: null]);
    }

    public function updatedTeam()
    {
        ModelsPlayer::whereId($this->player->id)->update(['team_id' => $this->team != 0 ? $this->team : null]);
    }

    public function render()
    {
        return view('livewire.player');
    }
}
