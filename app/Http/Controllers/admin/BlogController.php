<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'text' => 'required'
        ]);

        $getImage = new GetimageController();

        $file = $getImage->upload($request->image);
        Blog::create([
            'title' => $request->title,
            'text' => $request->text,
            'image' => $file['img_name']
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show' , compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit' , compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $getImage = new GetimageController();

        $blog->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        if ($request->has('image')) {
            $file = $getImage->upload($request->image);
            $blog->update(['image' => $file['img_name']]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->back();
    }

    public function getImage(Request $request){
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->move(public_path(env('BLOG_IMAGE_PATH')) , $fileName);
        return response()->json(['location'=>"/upload/files/blog/images/$fileName"]);
    }
}
