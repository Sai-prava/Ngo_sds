<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function add()
    {
        return view('admin.blog.create');
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
            $data['image'] = 'images/' . $imageName;
        }

        Blog::create($data);

        return redirect()->route('admin.blog.index')->with('success', 'Created successfully');
    }
    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('admin.blog.edit',compact('blogs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $blogs = Blog::findOrFail($id);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $imageName);
            $data['image'] = 'images/' . $imageName; // Store relative path
        }

        $blogs->update($data);

        return redirect()->route('admin.blog.index')->with('success', 'Updated successfully');
    }
    public function delete($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
