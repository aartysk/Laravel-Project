<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NewController;

class NewController extends Controller

{
    public function index() {
        return view('page', ['name' => 'Artis']);
    }
}