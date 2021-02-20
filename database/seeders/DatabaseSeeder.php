<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Team::create(['name' => 'DRB 24', 'color' => 'purple']);
        \App\Models\Team::create(['name' => 'Fantastic 50+', 'color' => 'darkblue']);
        \App\Models\Team::create(['name' => 'Friends XI', 'color' => 'red']);
        \App\Models\Team::create(['name' => 'Janbaaz Jhaveris', 'color' => 'DodgerBlue']);
        \App\Models\Team::create(['name' => 'President Panthers', 'color' => 'black']);
        \App\Models\Team::create(['name' => 'Saumit Stars', 'color' => 'orange']);
        \App\Models\Team::create(['name' => 'Sparsh Committee', 'color' => 'MediumSeaGreen']);
        \App\Models\Team::create(['name' => 'Zabardast Zampawala', 'color' => 'Tomato']);

        // \App\Models\Team::create(['name' => 'Zabardast Zampawala']);
        \App\Models\Player::create(['name' => 'Abhishek Damaniya ']);
        \App\Models\Player::create(['name' => 'Akshat Kachara']);
        \App\Models\Player::create(['name' => 'Amish Sanghavi']);
        \App\Models\Player::create(['name' => 'Ankit Rohitbhai Shah ']);
        \App\Models\Player::create(['name' => 'Ankur Nanavati ']);
        \App\Models\Player::create(['name' => 'Bhagyesh Jhaveri']);
        \App\Models\Player::create(['name' => 'Bhavik Shah']);
        \App\Models\Player::create(['name' => 'Bhavin S. Choksi']);
        \App\Models\Player::create(['name' => 'Chandreshbhai Kinariwala']);
        \App\Models\Player::create(['name' => 'Chintak Ashokbhai Jhaveri']);
        \App\Models\Player::create(['name' => 'Chintan Damania']);
        \App\Models\Player::create(['name' => 'Chintan Shaileshbhai Zaveri']);
        \App\Models\Player::create(['name' => 'Chiren Jhaveri']);
        \App\Models\Player::create(['name' => 'Darshan Dilipbhai Jhaveri']);
        \App\Models\Player::create(['name' => 'Darshan Rohitbhai Shah']);
        \App\Models\Player::create(['name' => 'Darshit Shah']);
        \App\Models\Player::create(['name' => 'Digant Jhaveri']);
        \App\Models\Player::create(['name' => 'Divya Nimesh Shah']);
        \App\Models\Player::create(['name' => 'Gaurav Zaveri']);
        \App\Models\Player::create(['name' => 'Harshil H Kania']);
        \App\Models\Player::create(['name' => 'Henil Kania']);
        \App\Models\Player::create(['name' => 'Jay Jhaveri']);
        \App\Models\Player::create(['name' => 'Jenish Kachara']);
        \App\Models\Player::create(['name' => 'Jigar Ajaybhai Lakdawala']);
        \App\Models\Player::create(['name' => 'Jignesh D Damania']);
        \App\Models\Player::create(['name' => 'Jinal Vinaykumar Shah']);
        \App\Models\Player::create(['name' => 'Jinansh Sanghavi']);
        \App\Models\Player::create(['name' => 'Jinesh Kachara']);
        \App\Models\Player::create(['name' => 'Kaivan Shreekantbhai Madrasi ']);
        \App\Models\Player::create(['name' => 'Kalpesh Chandrasen Damania']);
        \App\Models\Player::create(['name' => 'Karan Kachara']);
        \App\Models\Player::create(['name' => 'Keyur Sanghavi']);
        \App\Models\Player::create(['name' => 'Kinariwala Vrutant Chandreshbhai']);
        \App\Models\Player::create(['name' => 'Kuntal Jariwala']);
        \App\Models\Player::create(['name' => 'Maitrak Nanavati']);
        \App\Models\Player::create(['name' => 'Malay Shah']);
        \App\Models\Player::create(['name' => 'Manan Damania']);
        \App\Models\Player::create(['name' => 'Manil Jhaveri']);
        \App\Models\Player::create(['name' => 'Manthan Damania']);
        \App\Models\Player::create(['name' => 'Manthan Vinay Shah']);
        \App\Models\Player::create(['name' => 'Meet Shah']);
        \App\Models\Player::create(['name' => 'Megh Shah']);
        \App\Models\Player::create(['name' => 'Mihir Jariwala']);
        \App\Models\Player::create(['name' => 'Ojas Jhaveri']);
        \App\Models\Player::create(['name' => 'Pranav Jhaveri']);
        \App\Models\Player::create(['name' => 'Purav Zaveri']);
        \App\Models\Player::create(['name' => 'Rishil Shah']);
        \App\Models\Player::create(['name' => 'Rohan Kaji']);
        \App\Models\Player::create(['name' => 'Rushabh Kachara']);
        \App\Models\Player::create(['name' => 'Sagar Zaveri ']);
        \App\Models\Player::create(['name' => 'Samkit Kachara']);
        \App\Models\Player::create(['name' => 'Sarthak Jariwala']);
        \App\Models\Player::create(['name' => 'Saumya Jhaveri']);
        \App\Models\Player::create(['name' => 'Saurabh Madrasi ']);
        \App\Models\Player::create(['name' => 'Shitesh Kania']);
        \App\Models\Player::create(['name' => 'Shreyal Kachara']);
        \App\Models\Player::create(['name' => 'Smit Jhaveri']);
        \App\Models\Player::create(['name' => 'Sutej Shah']);
        \App\Models\Player::create(['name' => 'Swapnil Jhaveri']);
        \App\Models\Player::create(['name' => 'Vatsal Kania']);
        \App\Models\Player::create(['name' => 'Viken Choksi']);
        \App\Models\Player::create(['name' => 'Virag Dipehsbhai Jhaveri']);
        \App\Models\Player::create(['name' => 'Viraj Zaveri']);
        \App\Models\Player::create(['name' => 'Yash Damania']);
    }
}
