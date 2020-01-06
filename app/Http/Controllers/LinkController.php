<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function index()
    {
        // get all links from database.
        $links = Link::all();
        return view('welcome', compact('links'));
    }
}
