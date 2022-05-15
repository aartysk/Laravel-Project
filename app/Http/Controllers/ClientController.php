<?php

namespace App\Http\Controllers;

use App\Models\Client;

class ClientController extends Controller
{
    public function show()
  
    {
        $post = Client::get();
        dd($post);
    }
}
