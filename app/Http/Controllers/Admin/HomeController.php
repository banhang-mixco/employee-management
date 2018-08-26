<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $users = User::all();
        return view('admin.index', [
            'users' => $users
        ]);
    }
}
