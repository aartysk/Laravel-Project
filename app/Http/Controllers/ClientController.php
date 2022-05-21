<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;
use Illuminate\http\Request;

class ClientController extends Controller
{
    public function index(): View
  
    {
        return view('Clients.index', [
            'clients' => Client::get(),
        ]);
    }

    public function create(): View
    {
        return view('Clients.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function edit(Client $client): View
    {
        return view('Clients.edit');
    }

    public function update()
    {

        
    }

    public function show(Client $client): View
    {
        return view('Clients.show');
    }

    public function destroy()
    {

        
    }

}
