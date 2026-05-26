<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $unFeaturedJobs = Job::all()->groupBy("featured")[0];
        // $featuredJobs = Job::all()->groupBy("featured")[1];
        $jobs = Job::with(["employer", "tags"])->get();
        $featuredJobs = $jobs->where("featured", true);
        $unFeaturedJobs = $jobs->where("featured", false);
        $tags = Tag::all();
        return view("jobs.index", [
            "unFeaturedJobs" => $unFeaturedJobs,
            "featuredJobs" => $featuredJobs,
            "tags" => $tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jobs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attrs = $request->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", /* Rule::in(["Full Time", "Part Time"]) */ ],
            "url" => ["required", "url"],
            "tags" => ["nullable"]
        ]);

        $attrs["featured"] = $request->has("featured");
        $job = Auth::user()->employer->jobs()->create(Arr::except($attrs, ["tags"]));

        if($attrs["tags"] ?? false){
            $tags = explode(",", $attrs["tags"]);
            foreach ($tags as $tag) {
                $job->tag(trim($tag));
            }
        }
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
