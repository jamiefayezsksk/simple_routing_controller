<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Jamie Faye A. Jaime',
            'birthdate' => 'February 6, 2001',
            'age' => 23,
        ];
        return view('about-me', compact('data'));
    }
}
