<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Contributor; // Nanti di-uncomment jika sudah mulai integrasi database

class ContributorController extends Controller
{
    /**
     * Menampilkan halaman direktori kontributor.
     */
    public function index()
    {
        // Nantinya di sini Anda bisa melakukan query ke database
        // $contributors = Contributor::with('school')->get();
        // return view('pages.contributors', compact('contributors'));

        // Untuk saat ini, panggil view-nya saja karena data dummy masih ada di dalam file blade
        return view('pages.contributors');
    }
}
