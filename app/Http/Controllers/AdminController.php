<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $guru = Guru::all();

        return view('admin.index', [
            'gurus' => $guru
        ]);
    }
}
