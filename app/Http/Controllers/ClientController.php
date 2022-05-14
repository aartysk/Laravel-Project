<?php

namespace App\Http\Controllers;

use App\Models\Clients;

class ClientController extends Controller
{
    public function show()
  
    {
        $show = Clients::get();
        dd($show);
    }
}
