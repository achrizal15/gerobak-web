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
                'thumbnail' => Vite::asset('resources/images/public/darksteak/thumbnail.webp'),
                'icon' => Vite::asset('resources/images/public/darksteak/logo.webp'),
                'detail' => 'Template Eksklusif untuk Restoran Steak yang Menciptakan Pengalaman Kuliner Luar Biasa'
            ),
            array(
                'title' => 'SpaLuxe',
                'thumbnail' => Vite::asset('resources/images/public/kindspa/thumbnail.webp'),
                'icon' => Vite::asset('resources/images/public/kindspa/logo.webp'),
                'detail' => 'Template eksklusif kecantikan dengan desain mewah untuk pengalaman tak terlupakan di bisnis spa Anda.'
            ),
            array(
                'title' => 'Chacha Juice',
                'thumbnail' => Vite::asset('resources/images/public/chachajuice/thumbnail.webp'),
                'icon' => Vite::asset('resources/images/public/chachajuice/logo.webp'),
                'detail' => 'Template kualitas tinggi untuk bisnis minuman segar. Desain menarik untuk kesan yang tak terlupakan.'
            ),
        );
        return view('welcome', compact('business_lines'));
    }
}