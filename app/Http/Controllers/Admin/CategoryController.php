<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Image ;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoris = Category::latest()->paginate(10);
        return view('admin.product.category.index', compact('categoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name'=>'required'
        ]);


        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/category/' . $thumbnailname);
        }
        $data=[
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
            'author_id'=> Auth::user()->id,
            'thumbnail'=> $thumbnailname,
        ];

        Category::create($data);

        return redirect()->route('category.index');
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
        $category = Category::where('id', $id)->first();
        // return $category;
        return view('admin.product.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
            'author_id'=> Auth::user()->id,
        ];
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/category/' . $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }


        Category::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('category.index');
    }
}
