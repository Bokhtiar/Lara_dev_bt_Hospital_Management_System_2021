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

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $image = array();
        if ($request->hasFile('image')) {
            foreach ($request->image as $key => $photo) {
                $path = $photo->store('uploads/blog/photos');
                array_push($image, $path);
            }
            $blog['image']=json_encode($image);
        }
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog Added Successfully');
    }

    public function edit($id)
    {
        $edit = Blog::find($id);
        return view('admin.blog.create', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        if(isset($request->image)){
            $image = array();
                if ($request->hasFile('image')) {
                    foreach ($request->image as $key => $photo) {
                        $path = $photo->store('uploads/blog/photos');
                        array_push($image, $path);
                    }
                    $blog['image']=json_encode($image);
                }
        }else{
            $blog['image'] = $blog->image;
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog Updated Successfully');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        $blogs = Blog::latest()->take(6)->get();
        return view('admin.blog.show', compact('blog','blogs'));
    }
}
