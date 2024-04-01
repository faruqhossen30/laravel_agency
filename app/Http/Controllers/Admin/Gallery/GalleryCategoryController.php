<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerycategory = GalleryCategory::paginate(10);
        return view('admin.gallerycategory.index', compact('gallerycategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallerycategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'author_id' => Auth::user()->id
        ];


        GalleryCategory::create($data);
        return redirect()->route('gallery-category.index');
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
        $gallerycategory = GalleryCategory::where('id', $id)->first();
        // return $gallerycategory;
        return view('admin.gallerycategory.edit', compact('gallerycategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        GalleryCategory::where('id', $id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        return redirect()->route('gallery-category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        GalleryCategory::where('id', $id)->delete();
        return redirect()->route('gallery-category.index');
    }
}
