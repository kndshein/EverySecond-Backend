<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::truncate();

        Topic::create([
            'name' => 'Suicide Prevention'
        ]);
        Topic::create([
            'name' => 'Climate Change'
        ]);
    }
}
