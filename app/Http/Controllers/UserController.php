<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
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