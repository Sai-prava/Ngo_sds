<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::get();
        return view('admin.aboutUs.index',compact('aboutUs'));
    }

    public function add()
    {
        return view('admin.aboutUs.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName;
        }

        AboutUs::create($data);

        return redirect()->route('admin.about_us.index')->with('success', 'Created successfully');
    }

    public function edit($id)
    {
        $aboutUs = AboutUs::find($id);
        return view('admin.aboutUs.edit', compact('aboutUs'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $aboutUs = AboutUs::findOrFail($id);

        $data = $request->only(['description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        $aboutUs->update($data);

        return redirect()->route('admin.about_us.index')->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $aboutUs->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
