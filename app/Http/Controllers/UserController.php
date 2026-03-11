<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function index()
    {

    $data = [
        'level_id' => 2,
        'username' => 'manager_tiga',
        'nama' => 'Manager 3',
        'password' => Hash::make('12345'),
        
    ];

    UserModel::create($data);
        // 1. Siapkan data yang ingin diubah
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];

        // 2. Update data user berdasarkan username 'customer-1'
        UserModel::where('username', 'customer-1')->update($data); 

        // 3. Ambil semua data untuk ditampilkan ke view
        $user = UserModel::all(); 
        return view('user', ['data' => $user]);
    }
}