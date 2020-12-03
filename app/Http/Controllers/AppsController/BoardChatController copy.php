<?php

namespace App\Http\Controllers\AppsController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoardChatController extends Controller
{
    public function execute($fkBoard)
    {
        return view('AppsViews.chatView.chatboard');
    }
}
