<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = [
            'edge' => 'I can easily adapt and learn new things.',
            'description' => 'I am a web developer student with skills in both front-end and back-end development.',
            'additional_skills' => [
                'Front-end: HTML, CSS, JavaScript, React',
                'Back-end: PHP, Laravel, MySQL',
                'Tools: Git, VS Code',
                'Soft Skills: Problem-solving, teamwork, time management',
            ]
        ];
        return view('skills', compact('data'));
    }
}
