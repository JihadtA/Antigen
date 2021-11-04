<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user -> name = "antigen";
        $user -> email = "antigen@gmail.com";
        $user -> password = bcrypt('rahasia123');
        $user -> save();
    }
}
