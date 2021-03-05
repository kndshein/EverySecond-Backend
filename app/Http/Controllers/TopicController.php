<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Source;

class TopicController extends Controller
{
    public function index () 
    {
        $topics = Topic::all();

        $results = $topics->map(function ($topic, $key) {
            return [$topic,$topic->sources()->get()->all()];
            // return $topic->sources;
        });

        return response($results, 200)
        ->header('Content-Type', 'application/json');
    }
}