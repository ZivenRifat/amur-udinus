<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Collection; // Digunakan nanti jika sudah terhubung ke database

class CollectionController extends Controller
{
    public function index()
    {
        // $collections = Collection::with(['student', 'school'])->paginate(9);
        // return view('pages.collection', compact('collections'));

        return view('pages.collection');
    }
}
