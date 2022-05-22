<?php

namespace App\Http\Controllers;


class NewController extends Controller

{
    public function index() {
        return view('page', ['name' => 'Artis']);
    }
}