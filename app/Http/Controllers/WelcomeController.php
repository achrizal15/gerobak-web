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
                'title' => 'SpaLuxe',
                'thumbnail' => Vite::asset('resources/images/public/kindspa/thumbnail.png'),
                'icon' => Vite::asset('resources/images/public/kindspa/logo.png'),
                'detail' => 'Template Spa & Kecantikan eksklusif dengan desain mewah untuk menciptakan pengalaman kecantikan yang tak terlupakan di bisnis spa dan kecantikan Anda.'
            ),
            array(
                'title' => 'Chacha Juice',
                'thumbnail' => Vite::asset('resources/images/public/chachajuice/thumbnail.avif'),
                'icon' => Vite::asset('resources/images/public/chachajuice/logo.png'),
                'detail' => 'Template Eksklusif untuk Restoran Steak yang Menciptakan Pengalaman Kuliner Luar Biasa'
            ),
        );
        return view('welcome', compact('business_lines'));
    }
}