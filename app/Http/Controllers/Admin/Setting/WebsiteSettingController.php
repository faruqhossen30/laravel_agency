<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image ;
class WebsiteSettingController extends Controller
{
    public function websitesetting(){

        $site = websitesetting::first();
        // return  $site;
        return view('admin.setting.website-setting',compact('site'));
    }


    public function websitestoresetting(Request $request){



        $thumbnailname = null;
        if ($request->file('logo')) {
            $imagethumbnail = $request->file('logo');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnailname = Str::uuid() . '.' . $extension;
            $request->file('logo')->move(public_path('uploads/logo/'), $thumbnailname);
            // $data['logo'] = $thumbnailname;
        }

        WebsiteSetting::updateOrInsert([
            'id'=>1
        ],[
            'site_title'          => $request->site_title,
            'working_time'        => $request->working_time,
            'working_day'         => $request->working_day,
            'address'             => $request->address,
            'email'               => $request->email,
            'mobile_no'           => $request->mobile_no,
            'facebook_page_link'  => $request->facebook_page_link,
            'facebook_group_link' => $request->facebook_group_link,
            'facebook_link'       => $request->facebook_link,
            'twitter_link'        => $request->twitter_link,
            'instagram_link'      => $request->instagram_link,
            'linkedin_link'       => $request->linkedin_link,
            'youtube_link'        => $request->youtube_link,
            'intro_video_link'    => $request->intro_video_link,
            'logo'                => $thumbnailname,
            'info'                => $request->info,
        ]);

        return redirect()->route('website.setting');
    }
}
