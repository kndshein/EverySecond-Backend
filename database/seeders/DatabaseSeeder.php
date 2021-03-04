<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TopicSeeder;
use Database\Seeders\SourceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([TopicSeeder::class]);
        $this->call([SourceSeeder::class]);
    }
}
