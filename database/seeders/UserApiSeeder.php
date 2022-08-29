<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
            ["name"=>"Jakir Hussain","email"=>"jakirhussain88534@gmail.com"],
            ["name"=>"Nabida Hussain","email"=>"nabida@gmail.com"],
            ["name"=>"Jabida Hussain","email"=>"jabida@gmail.com"],
        ];
        User::insert($users);
    }
}
