<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class ViewController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = 'Home - Mouctechy';
        $viewData ["projects"] = Project::orderBy('created_at', 'desc')->get();
        $viewData ["skills"] = Skill::orderBy('created_at', 'asc')->get();

        return view('pages.index')->with('viewData', $viewData);
    }

    // Show single Project
    public function show($slug)
    {

        $viewData = [];
        $project = Project::where('slug', $slug)->first();
        $viewData['title'] = "Mouctechy - ".$project->getTitle();
        $viewData['project'] = $project;

        return view('pages.detail')->with('viewData', $viewData);
    }
}
