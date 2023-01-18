<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData ["title"] = "Add Projects";
        $viewData ["projects"] = Project::orderBy('created_at', 'desc')->get();
        $viewData ["skills"] = Skill::orderBy('created_at', 'desc')->get();
        return view('admin.index')->with("viewData", $viewData);
    }

    // Show create Form
    public function create()
    {
        return view('admin.create');
    }
    
    // @CRUD OPERATIONS
    // 1 - CREATE/STORE
    public function store(Request $request)
    {

        Project::validate($request);

        $newProject = new Project();
        $newProject -> setTitle($request->input('title'));
        $newProject -> setSlug(Str::slug($request->input('title'), '-'));
        $newProject -> setDescription($request->input('description'));
        $newProject -> setStack($request->input('stack'));
        $newProject -> setGithub($request->input('github'));
        $newProject -> setDemo($request->input('demo'));
        $newProject -> setImage('pro.webp');
        $newProject -> save();

        // UPLOAD COVER IMAGE
        if ($request->hasFile('image')) {
            $imageName = $newProject->getId()."."."project".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProject -> setImage($imageName);
            $newProject -> save();
        }

        return redirect('/admin');
    }

    // 2 - EDIT
    public function edit($id)
    {

        $viewData = [];
        $viewData['project'] = Project::findOrFail($id);

        return view('admin.edit') -> with('viewData', $viewData);
    }

    // 3 - UPDATE
    public function update(Request $request, $id)
    {

        Project::validate($request);

        $project = Project::findOrFail($id);
        $project -> setTitle($request->input('title'));
        $project -> setDescription($request->input('description'));
        $project -> setStack($request->input('stack'));
        $project -> setGithub($request->input('github'));
        $project -> setDemo($request->input('demo'));

        if ($request->hasfile('image')) {
            $imageName = $project->getId()."."."project".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $project -> setImage($imageName);
        }
        $project -> save();

        return redirect('admin');
    }

    // 4 - DELETE
    public function delete($id)
    {
        
        Project::destroy($id);
        return back();
    }
}
