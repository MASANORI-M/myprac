<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;

class CmsController extends Controller
{
    public function index()
    {
        $users = User::with('image')->get();

        // dd($users);

        return view('cms.cmstop', compact('users'));
    }
}
