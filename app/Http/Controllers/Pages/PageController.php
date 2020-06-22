<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getMainPage()
    {
        return view('layouts.pages.users.main');
    }
}
