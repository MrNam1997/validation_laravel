<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostConTroller extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {

        if ($validatedData = $request->validate([
            'number' => 'required|numeric',
        ])) ;
        else
            echo 'đã xác thực thành công';
    }
}
