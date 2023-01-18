<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UserAdminImport implements WithHeadingRow, ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new User([
            'id_role'   => 2,
            'id_status_user' => 2,
            'name'      => $row['name'],
            'email'     => $row['email'],
            'password'  => Hash::make($row['password']),
        ]);

    }
}
