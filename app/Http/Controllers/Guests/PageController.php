<?php

namespace App\Http\Controllers\Guests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comic;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }    
}
