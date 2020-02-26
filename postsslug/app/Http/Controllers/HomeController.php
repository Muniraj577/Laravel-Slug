<?php

namespace App\Http\Controllers;

use App\Post;
use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::all()->take(1);
        $students = Student::all()->take(2);
        return view('index', compact('posts', 'students'))->with('id');
    }
}
