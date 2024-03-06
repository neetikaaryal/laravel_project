<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8001/api/customers');

        $user = $response->json();

        return view('portfolio', ['user' => $user]);
    }
}
