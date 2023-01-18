<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Skill;

class SkillsController extends Controller
{

    // Show create Form
    public function create()
    {
        return view('admin.skills.create');
    }
    
    // @CRUD OPERATIONS
    // 1 - CREATE/STORE
    public function store(Request $request)
    {

        Skill::validate($request);

        $newSkill = new Skill();
        $newSkill -> setTitle($request->input('title'));
        $newSkill -> setImage('pro.webp');
        $newSkill -> save();

        // UPLOAD COVER IMAGE
        if ($request->hasFile('image')) {
            $imageName = $newSkill->getId().".skill".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newSkill -> setImage($imageName);
            $newSkill -> save();
        }

        return redirect('/admin');
    }

    // 2 - EDIT
    public function edit($id)
    {

        $viewData = [];
        $viewData['skill'] = Skill::findOrFail($id);

        return view('admin.skills.edit') -> with('viewData', $viewData);
    }

    // 3 - UPDATE
    public function update(Request $request, $id)
    {

        Skill::validate($request);

        $Skill = Skill::findOrFail($id);
        $Skill -> setTitle($request->input('title'));

        if ($request->hasfile('image')) {
            $imageName = $Skill->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );

            $Skill -> setImage($imageName);
        }
        $Skill -> save();

        return redirect('/admin');
    }

    // 4 - DELETE
    public function delete($id)
    {
        
        Skill::destroy($id);
        return back();
    }
}
