<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class SixTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create(['name' => 'FANTASTIC 50+', 'color' => 'darkblue', 'points' => 200000]);
        Team::create(['name' => 'JANBAAZ JHAVERIS', 'color' => 'dodgerblue', 'points' => 200000]);
        Team::create(['name' => 'LAJAWAB LAKDAWALA', 'color' => 'orange', 'points' => 200000]);
        Team::create(['name' => 'DAMDAR DAMANIAS', 'color' => 'black', 'points' => 200000]);
        Team::create(['name' => 'SPARSH COMMITTEE', 'color' => 'red', 'points' => 200000]);

        Player::create(['name' => 'ABHISHEK ZAVERI']);
        Player::create(['name' => 'ANKIT SHAH']);
        Player::create(['name' => 'ANKUR NANAVATI']);
        Player::create(['name' => 'BHAGYESH JHAVERI']);
        Player::create(['name' => 'BHASHIN DALAL']);
        Player::create(['name' => 'BHAVIN CHOKSI']);
        Player::create(['name' => 'CHINTAN DAMANIA']);
        Player::create(['name' => 'CHIREN JHAVERI']);
        Player::create(['name' => 'DARSHAN SHAH']);
        Player::create(['name' => 'DARSHAN JHAVERI']);
        Player::create(['name' => 'DARSHIT SHAH (DAMAN)']);
        Player::create(['name' => 'DEEPAK RASIKLAL DALIA']);
        Player::create(['name' => 'DHARM SHAH']);
        Player::create(['name' => 'DIGANT JHAVERI']);
        Player::create(['name' => 'DIVYA SHAH']);
        Player::create(['name' => 'GAURAV ZAVERI']);
        Player::create(['name' => 'HANSAL LAKDAWALA']);
        Player::create(['name' => 'HARSHIL KANIA']);
        Player::create(['name' => 'HENIL KANIA']);
        Player::create(['name' => 'HITESH SHAH (GANDEVI)']);
        Player::create(['name' => 'JASH ZAVERI (MUMBAI)']);
        Player::create(['name' => 'JAY JHAVERI']);
        Player::create(['name' => 'JENIL SHAH (MUMBAI)']);
        Player::create(['name' => 'JENISH KACHARA']);
        Player::create(['name' => 'JIGAR LAKDAWALA ']);
        Player::create(['name' => 'JIGNESH BHADRESH DAMANIA']);
        Player::create(['name' => 'JINAL SHAH']);
        Player::create(['name' => 'JINESH KACHARA']);
        Player::create(['name' => 'KAIVAN MADRASI']);
        Player::create(['name' => 'KALPESH DAMANIA (LALIKAKA)']);
        Player::create(['name' => 'KALPESH C DAMANIA']);
        Player::create(['name' => 'KARAN KACHARA']);
        Player::create(['name' => 'KUNTAL JARIWALA']);
        Player::create(['name' => 'MALAY SHAH (MUMBAI)']);
        Player::create(['name' => 'MANAN DAMANIA']);
        Player::create(['name' => 'MANTHAN SHAH']);
        Player::create(['name' => 'OJAS JHAVERI']);
        Player::create(['name' => 'PINAL SHAH']);
        Player::create(['name' => 'PREMAL LAKDAWALA']);
        Player::create(['name' => 'RAJU JHAVERI']);
        Player::create(['name' => 'RISHIL SHAH']);
        Player::create(['name' => 'ROHAN KAJI']);
        Player::create(['name' => 'RUSHABH KACHRA']);
        Player::create(['name' => 'SAMARTH DAMANIA']);
        Player::create(['name' => 'SAUMIL ZAVERI']);
        Player::create(['name' => 'SAUMYA DAMANIA']);
        Player::create(['name' => 'SAURABH MADRASI']);
        Player::create(['name' => 'SHAILESHBHAI DAMANIA']);
        Player::create(['name' => 'SHREYAL KACHARA']);
        Player::create(['name' => 'TAPAN ZAVERI (MUMBAI)']);
        Player::create(['name' => 'VATSAL KAINIA']);
        Player::create(['name' => 'VIKEN CHOKSI']);
        Player::create(['name' => 'VIRAJ ZAVERI']);
        Player::create(['name' => 'VIVAAN JHAVERI']);
        Player::create(['name' => 'YASH ZAVERI']);
    }
}
