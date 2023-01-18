<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\StatusUser;
use Illuminate\Http\Request;

class StatusUsersController extends Controller
{
    public function index()
    {
        $status_users['statusUsers'] = StatusUser::get();
        return view();
    }
}
