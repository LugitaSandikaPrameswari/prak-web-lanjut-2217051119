<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Kelas;

class UserController extends Controller
{
    public function create(){
        return view('create_user', [
            'kelas' => Kelas::all()
        ]);
    }
    public function store(Request $request) {
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];

        return view('profile', $data);
    }
}

