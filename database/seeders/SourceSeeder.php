<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Source;
use App\Models\Topic;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topic1 = Topic::find(1);

        $source = $topic1->sources()->createMany([
            ['name' => 'National Institute of Mental Health',
            'url' => 'https://www.nimh.nih.gov/health/statistics/suicide.shtml'],['name' => 'Test',
            'url' => 'poop.poop']
        ]);

        Source::create([
            'topic_id' => 2,
            'name' => 'NASA',
            'url' => 'https://climate.nasa.gov/'
        ]);
    }
}
