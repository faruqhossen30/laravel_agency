<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Admin\Portfolio\Portfolio;
use App\Models\Admin\Portfolio\PortfolioImage;
use App\Models\Admin\Product\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
       return view('admin.portfolio.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        // return $request->all();

        $thumbnailname = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            // Image::make($imagethumbnail)->save('uploads/portfolio/' . $thumbnailname);
            $request->file('thumbnail')->move(public_path('uploads/portfolios/'), $thumbnailname);
        }

        $video = null;
        if ($request->file('video')) {
            $imagethumbnail = $request->file('video');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $video = Str::uuid() . '.' . $extension;
            // Image::make($imagethumbnail)->save('uploads/portfolio/' . $video);
            $request->file('video')->move(public_path('uploads/portfolios/'), $video);
        }

        $data = [
            'title'       => $request->title,
            'slug'        => Str::slug($request->title, '-'),
            'user_id'     => Auth::user()->id,
            'category_id' => $request->category_id,
            'thumbnail'   => $thumbnailname,
            'video'       => $video,
            'status'      => $request->status,
        ];

        $porfolio = Portfolio::create($data);

        if (!empty($request->file('portfolio_image'))) {
            $captions = $request->captions;
            foreach ($request->file('portfolio_image') as $index => $imagefile) {
                $imagethumbnail = $imagefile;
                $extension = $imagethumbnail->getClientOriginalExtension();
                $thumbnailname = Str::uuid() . '.' . $extension;
                $request->file('portfolio_image')[$index]->move(public_path('uploads/portfolios/image/'), $thumbnailname);

                PortfolioImage::create([
                    'portfolio_id' => $porfolio->id,
                    'image'        => $thumbnailname,
                    'caption'      => $captions[$index],
                ]);
            }
        }

        if (!empty($request->file('portfolio_video'))) {
            $captions = $request->video_caption;
            foreach ($request->file('portfolio_video') as $index => $videofile) {
                $videohumbnail = $videofile;
                $extension = $videohumbnail->getClientOriginalExtension();
                $videoName = Str::uuid() . '.' . $extension;
                $request->file('portfolio_video')[$index]->move(public_path('uploads/portfolios/video/'), $videoName);

                PortfolioImage::create([
                    'portfolio_id' => $porfolio->id,
                    'video'        => $videoName,
                    'caption'      => $captions[$index],
                ]);
            }
        }


        Session::flash('create');
        return redirect()->route('portfolio.index');
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
        $categories = Category::get();
        $portfolio = Portfolio::with('images')->firstWhere('id', $id);

        // return $portfolio;

        return view('admin.portfolio.edit', compact('categories', 'portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required'
        ]);


        $thumbnailname = null;
        $data = [
            'title'       => $request->title,
            'slug'        => Str::slug($request->title, '-'),
            'category_id' => $request->category_id,
            'status'      => $request->status,
        ];

        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            $request->file('thumbnail')->move(public_path('uploads/portfolio/'), $thumbnailname);
            $data['thumbnail'] = $thumbnailname;
        }

        $porfolio = Portfolio::firstWhere('id', $id)->update($data);

        if (!empty($request->file('portfolio_image'))) {
            $captions = $request->captions;
            // PortfolioImage::where('portfolio_id', $id)->delete();

            foreach ($request->file('portfolio_image') as $index => $imagefile) {
                $imagethumbnail = $imagefile;
                $extension = $imagethumbnail->getClientOriginalExtension();
                $thumbnailname = Str::uuid() . '.' . $extension;
                // Image::make($imagethumbnail)->save('uploads/portfolio/image/' . $thumbnailname);
                $request->file('portfolio_image')[$index]->move(public_path('uploads/portfolio/image/'), $thumbnailname);

                PortfolioImage::create([
                    'portfolio_id' => $id,
                    'image'        => $thumbnailname,
                    'caption'      => $captions[$index],
                ]);
            }
        }

        if (!empty($request->file('portfolio_video'))) {
            $captions = $request->video_caption;
            foreach ($request->file('portfolio_video') as $index => $videofile) {
                $videohumbnail = $videofile;
                $extension = $videohumbnail->getClientOriginalExtension();
                $videoName = Str::uuid() . '.' . $extension;
                $request->file('portfolio_video')[$index]->move(public_path('uploads/portfolio/video/'), $videoName);

                PortfolioImage::create([
                    'portfolio_id' => $id,
                    'video'        => $videoName,
                    'caption'      => $captions[$index],
                ]);
            }
        }

        Session::flash('create');
        return redirect()->route('portfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::with('images')->firstWhere('id', $id);
        // return $portfolio;

        if ($portfolio->thumbnail) {
            $portfoliothumb = 'uploads/portfolios/' . $portfolio->thumbnail;
            if (file_exists($portfoliothumb)) {
                unlink($portfoliothumb);
            }
        }

        if ($portfolio->video) {
            $portfoliotVideo = 'uploads/portfolio/' . $portfolio->video;
            if (file_exists($portfoliotVideo)) {
                unlink($portfoliotVideo);
            }
        }



        if (!empty($portfolio->images)) {
            foreach ($portfolio->images as $image) {
                if ($image->image) {
                    $path = 'uploads/portfolio/image/' . $image->image;
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }

                if ($image->video) {
                    $path = 'uploads/portfolio/video/' . $image->video;
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }
        }

        Portfolio::firstWhere('id', $id)->delete();

        return redirect()->route('portfolio.index');
    }
}
