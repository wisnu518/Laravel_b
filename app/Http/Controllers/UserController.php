<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    	return view('user', [ 'nama' => 'tamami' ]);
    }

    public function setName($name) {
    	return view('user', [ 'nama' => $name ]);
    }

    public function setBio(Request $data) {
    	return view('bio', [
    		'nik' => $data['nik'],
    		'nama' => $data['nama'],
    		'kelas' => $data['kelas']
    	]);
    }
}
