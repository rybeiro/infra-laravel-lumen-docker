<?php

namespace App\Http\Controllers;

class TesteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return response()->json(['message' => 'Teste']);
    }

    //
}
