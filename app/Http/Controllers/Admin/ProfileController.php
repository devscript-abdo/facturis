<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        
        return view('pages.profile.index', compact('user'));
    }
}
