<?php

namespace App\Http\Controllers\Admin\Review;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Category;
use App\Models\Admin\Review\Review;
use App\Models\Admin\Review\ReviewType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        // return $reviews;
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types      = ReviewType::get();
        $categories = Category::get();
        return view('admin.review.create',compact('types','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'rating'         => 'required',
            'date'           => 'required',
            'review_type_id' => 'required',
            'review'         => 'required'
        ]);

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            $request->file('thumbnail')->move(public_path('uploads/reviews/'), $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }


        $data = [
            'name'           => $request->name,
             'slug'          => Str::slug($request->name, '-'),
            'rating'         => $request->rating,
            'date'           => $request->date,
            'review'         => $request->review,
            'thumbnail'      => $thumbnailname,
            'review_type_id' => $request->review_type_id,
            'category_id'    => $request->category_id,
            'review_url'     => $request->review_url,
            'user_id'        => Auth::user()->id,
            'status'         => $request->status
        ];

        Review::create($data);

        Session::flash('create');
        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $types      = ReviewType::get();
        $review     = Review::firstWhere('id', $id);
        $categories = Category::get();
        return view('admin.review.edit', compact('review','types','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'           => 'required',
            'rating'         => 'required',
            'date'           => 'required',
            'review_type_id' => 'required',
            'review'         => 'required'
        ]);

        $thumbnailname = null;
        $data = [
            'name'           => $request->name,
             'slug'          => Str::slug($request->name, '-'),
            'rating'         => $request->rating,
            'date'           => $request->date,
            'review'         => $request->review,
            'review_type_id' => $request->review_type_id,
            'category_id'    => $request->category_id,
            'review_url'     => $request->review_url,
            'status'         => $request->status
        ];

        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            $request->file('thumbnail')->move(public_path('uploads/reviews/'), $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }




        Review::firstWhere('id', $id)->update($data);

        Session::flash('update');
        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::firstWhere('id', $id);
        // return   $review;

        if ($review->thumbnail) {
            $path = 'uploads/reviews/'. $review->thumbnail;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $review->delete();

        return redirect()->back();
    }
}
