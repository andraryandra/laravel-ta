<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Imports\UserFlsImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class UserFlsController extends Controller
{
    public function index()
    {
        $usersFLS = User::where('id_role', 3)->get();
        return view('projects.page-projects.users.users-fls.index', compact('usersFLS'));
    }

    public function create()
    {
        $userFLS = User::get();
        return view('projects.page-projects.users.users-fls.create', compact('userFLS'));
    }

    public function store(Request $request)
    {
        $rules = [
            'id_role' => 'required',
            'id_status_user' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
        ];

        $messages = [
            'id_role.required' => 'Role wajib diisi!',
            'id_status_user.required' => 'Status User wajib diisi!',
            'name.required' => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 6 karakter!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $userFLS = User::create([
            'id_role' => $request->id_role,
            'id_status_user' => $request->id_status_user,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($userFLS){
            //redirect dengan pesan sukses
            return redirect()->route('fls.index')->withSuccess('Data Berhasil Disimpan!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('fls.create')->withError('Data Gagal Disimpan!');
        }
    }

    public function indeximport()
    {
        return view('projects.page-projects.users.users-fls.import');
    }

    public function import(Request $request){
        //melakukan import file
       $importAdmin =  Excel::import(new UserFlsImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        if($importAdmin){
            //redirect dengan pesan sukses
            return redirect()->route('fls.index')->withSuccess('Data Berhasil Diimport!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('fls.import')->withError('Data Gagal Diimport!');
        }
    }
}
