<?php

namespace App\Http\Controllers;

use App\Models\Document;

class AboutController extends Controller
{
    public function index()
    {
        $edu = Document::where('category', 'educational_background')->get();
        $projects = Document::where('category', 'project')->get();
        $achievements = Document::where('category', 'achievement')->get();

        return view('about', compact('edu', 'projects', 'achievements'));
    }
}
