<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function indexAdmin()
    {
        // $data_users['users'] = User::all();
        $data_users['users_admin'] = User::where('id_role', 1)
        ->with('categoriRole')
        ->with('statusUser')
        ->get();

        return view('projects.page-projects.users.users-admin.index', $data_users, ['type_menu' => 'users']);
    }

    public function indexFLS()
    {
        // $data_users['users'] = User::all();
        $data_users['users_fls'] = User::where('id_role', 3)
        ->with('categoriRole')
        ->with('statusUser')
        ->get();

        return view('projects.page-projects.users.users-fls.index', $data_users, ['type_menu' => 'users']);
    }
}
