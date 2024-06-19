<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data = [
            'hobbies' => [
                'Watching Korean dramas for hours when I have free time.',
                'Cooking and cleaning.',
                'Painting and designing.',
                'Crocheting and upcycling clothes.'
            ]
        ];
        return view('hobbies', compact('data'));
    }
}
