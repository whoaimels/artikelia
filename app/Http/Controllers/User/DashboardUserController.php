<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;


class DashboardUserController extends Controller
{

    public function index() {
        $artikels = Article::where('status', 'Published')->get();  
        return view('user.dashboard', compact('artikels'));
    }

    public function read($id){
        $artikel = Article::findOrFail($id);
        return view('user.read', compact('artikel'));
    }
}
