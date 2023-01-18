<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $user_administrator_count = User::where('id_role', 1)->count();
        $user_admin_count = User::where('id_role', 2)->count();
        $user_fls_count = User::where('id_role', 3)->count();

        return view('projects.page-projects.dashboard',
          compact('user_administrator_count','user_admin_count','user_fls_count'),
         ['type_menu' => 'dashboard']);
    }
}
