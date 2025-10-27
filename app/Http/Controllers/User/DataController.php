<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index()
    {
        return view('user.data');
    }

    public function addForm()
    {
        return view('user.form');
    }
}
