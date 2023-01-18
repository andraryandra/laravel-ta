<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Imports\UserAdminImport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersAdmin = User::where('id_role', 2)->get();
        return view('projects.page-projects.users.users-admin.index', compact('usersAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userAdmin = User::get();
        return view('projects.page-projects.users.users-admin.create', compact('userAdmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $userAdmin = User::create([
            'id_role' => $request->id_role,
            'id_status_user' => $request->id_status_user,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        if($userAdmin){
            //redirect dengan pesan sukses
            return redirect()->route('users.admin.index')->withSuccess('Data Berhasil Disimpan!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.admin.create')->withError('Data Gagal Disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAdmin = User::findOrFail($id);
        return view('projects.page-projects.users.users-admin.show', compact('userAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userAdmin = User::findOrFail($id);
        return view('projects.page-projects.users.users-admin.edit', compact('userAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_status_user' => 'required',
            'name' => 'required',
            'email' => 'required',
        ];
        $messages = [
            'id_status_user.required' => 'Status User wajib diisi!',
            'name.required' => 'Nama wajib diisi!',
            'email.required' => 'Email wajib diisi!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $userAdmin = User::where('id', $id)->update([
            'id_status_user' => $request->id_status_user,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        if($userAdmin){
            //redirect dengan pesan sukses
            return redirect()->route('users.admin.index')->withSuccess('Data Berhasil Diubah!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.admin.edit')->withError('Data Gagal Diubah!');
        }

    }

    public function resetPasswordIndex($id)
    {
        $userAdmin = User::findOrFail($id);
        return view('projects.page-projects.users.users-admin.reset-password', compact('userAdmin'));
    }

    public function resetPassword(Request $request, $id)
    {
        $rules = [
            'password' => 'required|min:6',
        ];
        $messages = [
            'password.required' => 'Password wajib diisi!',
            'password.min' => 'Password minimal 6 karakter!',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $userAdmin = User::where('id', $id)->update([
            'password' => Hash::make($request->password),
        ]);

        if($userAdmin){
            //redirect dengan pesan sukses
            return redirect()->route('users.admin.index')->withSuccess('Data Berhasil Diubah!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.admin.edit')->withError('Data Gagal Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userAdmin = User::findOrFail($id);
        $userAdmin->delete();

        if($userAdmin){
            //redirect dengan pesan sukses
            return redirect()->route('users.admin.index')->withSuccess('Data Berhasil Dihapus!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.admin.index')->withError('Data Gagal Dihapus!');
        }
    }

    public function indeximport()
    {
        return view('projects.page-projects.users.users-admin.import');
    }

    public function import(Request $request){
        //melakukan import file
       $importAdmin =  Excel::import(new UserAdminImport, request()->file('file'));
        //jika berhasil kembali ke halaman sebelumnya
        if($importAdmin){
            //redirect dengan pesan sukses
            return redirect()->route('users.admin.index')->withSuccess('Data Berhasil Diimport!');
        } else {
            //redirect dengan pesan error
            return redirect()->route('users.admin.indeximport')->withError('Data Gagal Diimport!');
        }
    }
}
