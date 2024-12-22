<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(6);
        return view('news', compact('news'));
    }

    public function show($id)
    {
        $item = News::findOrFail($id);
        return view('item', compact('item'));
    }
}
