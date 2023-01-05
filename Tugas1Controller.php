<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tugas1;

class Tugas1Controller extends Controller
{
    public function index()
    {
        return view('Tugas1');
    }
}