<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($id, $nama) {
        return view('user')
        ->with('id',$id)
        ->with('nama',$nama);
    }
}
