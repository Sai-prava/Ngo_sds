<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::all();
        return view('admin.logo.index', compact('logos'));
    }

    public function add()
    {
        return view('admin.logo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['title']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        Logo::create($data);

        return redirect()->route('admin.logo.index')->with('success', 'Created successfully');
    }
    public function edit($id)
    {
        $logos = Logo::find($id);
        return view('admin.logo.edit',compact('logos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $logos = Logo::findOrFail($id);

        $data = $request->only(['title']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        $logos->update($data);

        return redirect()->route('admin.logo.index')->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        $logos = Logo::findOrFail($id);
        $logos->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
