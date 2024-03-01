<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $user = DB::table('portfolio')->where('name', 'Neetika')->first();
        return view('portfolio', ['user' => $user]);
    }
}
