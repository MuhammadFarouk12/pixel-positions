<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // $jobs = $tag->jobs()->limit(3)->get();
        $jobs = $tag->jobs()->with(["employer", "tags"])->limit(3)->get();
        return view("results", ["jobs" => $jobs]);
    }
}
