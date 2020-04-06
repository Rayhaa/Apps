<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Praktikum;
class PraktikumController extends Controller
{
    public function index()
    {   

        $praktikum = Praktikum::all();    
        return view('admin.praktikum', ['praktikum' => $praktikum]);
    }
}
