<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;

class WelcomeController extends Controller
{
    public function index()
    {
        $business_lines = array(
            array(
                'title' => 'Dark Steak',
                'thumbnail' => Vite::asset('resources/images/public/darksteak/thumbnail.png'),
                'icon' => Vite::asset('resources/images/public/darksteak/logo.png'),
                'detail' => 'Template Eksklusif untuk Restoran Steak yang Menciptakan Pengalaman Kuliner Luar Biasa'
            ),
            array(
                'title' => 'Dark Steak',
                'thumbnail' => Vite::asset('resources/images/public/darksteak/thumbnail.png'),
                'icon' => Vite::asset('resources/images/public/darksteak/logo.png'),
                'detail' => 'Template Eksklusif untuk Restoran Steak yang Menciptakan Pengalaman Kuliner Luar Biasa'
            ),
            array(
                'title' => 'Dark Steak',
                'thumbnail' => Vite::asset('resources/images/public/darksteak/thumbnail.png'),
                'icon' => Vite::asset('resources/images/public/darksteak/logo.png'),
                'detail' => 'Template Eksklusif untuk Restoran Steak yang Menciptakan Pengalaman Kuliner Luar Biasa'
            ),
        );
        return view('welcome', compact('business_lines'));
    }
}