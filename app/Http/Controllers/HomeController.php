<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('events')->get();
        $partners = Partner::all();

        return view('welcome', compact('categories', 'partners'));
    }
}
