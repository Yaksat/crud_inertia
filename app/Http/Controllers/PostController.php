<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return inertia('Post/Index');
    }

    public function create()
    {
        return inertia('Post/Create');
    }
}
