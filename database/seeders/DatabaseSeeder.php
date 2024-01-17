<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\download_links;
use App\Models\management;
use App\Models\users;
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
        // users::insert([
        //     'username' => '1',
        //     'password' => '1',
        //     'role' => '1'
        // ]);

        // management::insert([
        //     "bg" => null
        // ]);

        download_links::insert([
            "main_title" => null
        ]);
    }
}
