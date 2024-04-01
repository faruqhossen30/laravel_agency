<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatSectionController extends Controller
{
    public function chatsection(){
        return view('admin.setting.chat-section');
    }
}
