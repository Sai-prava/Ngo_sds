<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function add()
    {
        return view('admin.banner.create');
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

        Banner::create($data);

        return redirect()->route('admin.banner.index')->with('success', 'Created successfully');
    }
    public function edit($id)
    {
        $banners = Banner::find($id);
        return view('admin.banner.edit',compact('banners'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $banners = Banner::findOrFail($id);

        $data = $request->only(['title']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        $banners->update($data);

        return redirect()->route('admin.banner.index')->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        $banners = Banner::findOrFail($id);
        $banners->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
