<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UserFlsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'id_role'   => 3,
            'id_status_user' => 2,
            'name'      => $row['name'],
            'email'     => $row['email'],
            'password'  => Hash::make($row['password']),
        ]);
    }
}
