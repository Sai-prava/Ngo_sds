<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class whatWeDoController extends Controller
{
    public function index()
    {
        $items = WhatWeDo::all();
        return view('admin.what_we_do.index', compact('items'));
    }
    public function add()
    {
        return view('admin.what_we_do.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        WhatWeDo::create($data);

        return redirect()->route('admin.whatwedo.index')->with('success', 'Created successfully');
    }

    public function edit($id)
    {
        $items = WhatWeDo::findOrFail($id);
        return view('admin.what_we_do.edit', compact('items'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $item = WhatWeDo::findOrFail($id);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        $item->update($data);

        return redirect()->route('admin.whatwedo.index')->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        $item = WhatWeDo::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
