<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thumbnails = Gallery::latest()->paginate(8);
        //    return $thumbnail;
        return view('admin.gallery.index', compact('thumbnails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate( ['thumbnail' => 'required',]);

        $imagethumbnail = $request->file('file');
        $extension = $imagethumbnail->getClientOriginalExtension();
        $thumbnailname = Str::uuid() . '.' . $extension;
        Image::make($imagethumbnail)->save('uploads/gallerys/' . $thumbnailname);
        $data = ['name'   => $thumbnailname, 'author_id' => Auth::user()->id];

        Gallery::create($data);
        return redirect()->route('gallery.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gallery::firstWhere('id', $id)->delete();

        return redirect()->back();
    }
}
