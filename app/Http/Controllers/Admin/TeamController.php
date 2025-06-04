<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    public function add()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        Team::create($data);

        return redirect()->route('admin.team.index')->with('success', 'Created successfully');
    }
    public function edit($id)
    {
        $teams = Team::find($id);
        return view('admin.team.edit',compact('teams'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $teams = Team::findOrFail($id);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        $teams->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        $teams = Team::findOrFail($id);
        $teams->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
