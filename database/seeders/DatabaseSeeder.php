<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Certificate;
use App\Models\Event;
use App\Models\Recipient;
use App\Models\User;
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
        User::factory(3)->create();
        Certificate::factory(20)->create();
        Event::factory(3)->create();
        Recipient::factory(20)->create();
    }
}
