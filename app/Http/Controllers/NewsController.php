<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\News; // Digunakan nanti saat sudah ada tabel database

class NewsController extends Controller
{
    public function index()
    {
        // Nantinya data akan diambil dari database seperti ini:
        // $featuredNews = News::latest()->first();
        // $newsList = News::where('id', '!=', $featuredNews->id)->paginate(6);

        return view('pages.news');
    }

    public function show($slug)
    {
        // Untuk halaman baca berita lengkap
        return view('pages.news-detail', compact('slug'));
    }
}
