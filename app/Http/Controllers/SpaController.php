<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class SpaController extends Controller
{
    public function index()
    {
        return view('app');
    }
}
