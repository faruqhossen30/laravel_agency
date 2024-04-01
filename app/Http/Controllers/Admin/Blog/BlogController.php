<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\BlogCategory;
use App\Models\Admin\Blog\BlogSoftware;
use App\Models\Admin\Blog\Software;
use App\Models\Admin\Product\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        $softwares  = Software::get();
        return view('admin.blog.blog.create', compact('categories','softwares'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'               => 'required',
                'short_description'   => 'required',
                'project_description' => 'required',
                'description'         => 'required',
            ]
        );

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            $request->file('thumbnail')->move(public_path('uploads/reviews/'), $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }
        $data = [
            'title'               => $request->title,
            'slug'                => Str::slug($request->title, '-'),
            'short_description'   => $request->short_description,
            'project_description' => $request->project_description,
            'description'         => $request->description,
            'thumbnail'           => $thumbnailname,
            'user_id'             => Auth::user()->id,
            'meta_title'          => $request->meta_title,
            'meta_description'    => $request->meta_description,
            'meta_keyword'        => $request->meta_keyword,
            'status'              => $request->status
        ];

        $blog = Blog::create($data);

        if(!empty($request->category_ids)){
             foreach($request->category_ids as $id){
                BlogCategory::create([
                    'blog_id'=>$blog->id,
                    'category_id'=>$id
                ]);
             }
        }

        if(!empty($request->software_ids)){
             foreach($request->software_ids as $id){
                BlogSoftware::create([
                    'blog_id'=>$blog->id,
                    'software_id'=>$id
                ]);
             }
        }

        Session::flash('create');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::with('categories','softwares')->firstWhere('id', $id);
        $categories = Category::get();
        $softwares = Software::get();
        $cat_ids = $blog->categories->pluck('id')->toArray();
        $soft_ids = $blog->softwares->pluck('id')->toArray();

        return view('admin.blog.blog.edit', compact('categories','blog','cat_ids','soft_ids','softwares'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'title'               => 'required',
                'short_description'   => 'required',
                'project_description' => 'required',
                'description'         => 'required',
            ]
        );

        $data = [
           'title'               => $request->title,
            'slug'                => Str::slug($request->title, '-'),
            'short_description'   => $request->short_description,
            'project_description' => $request->project_description,
            'description'         => $request->description,
            'user_id'             => Auth::user()->id,
            'meta_title'          => $request->meta_title,
            'meta_description'    => $request->meta_description,
            'meta_keyword'        => $request->meta_keyword,
            'status'              => $request->status
        ];

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail    = $request->file('thumbnail');
            $extension         = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname     = Str::uuid() . '.' . $extension;
            $request->file('thumbnail')->move(public_path('uploads/blog/'), $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }

        $blog = Blog::firstWhere('id',$id)->update($data);

        if(!empty($request->category_ids)){
            BlogCategory::where('blog_id', $id)->delete();
             foreach($request->category_ids as $cat){
                BlogCategory::create([
                    'blog_id'     => $id,
                    'category_id' => $cat
                ]);
             }
        }

        if(!empty($request->software_ids)){
            BlogSoftware::where('blog_id', $id)->delete();
             foreach($request->software_ids as $soft){
                BlogSoftware::create([
                    'blog_id'     => $id,
                    'software_id' => $soft
                ]);
             }
        }

        Session::flash('create');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id', $id)->delete();
        return redirect()->route('blog.index')->with('success','data successfully Deleted');
    }
}
