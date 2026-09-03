<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\PotensiDesa;

class AdminController extends Controller
{
    public function index()
    {
        $totalBerita = Berita::count();
        $totalGaleri = Galeri::count();
        $totalPotensi = PotensiDesa::count();
        $beritaTerbaru = Berita::latest()->take(5)->get();

        return view('layouts.dashboard', compact(
            'totalBerita', 
            'totalGaleri', 
            'totalPotensi', 
            'beritaTerbaru'
        ));
    }
}