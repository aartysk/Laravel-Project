<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(): View
  
    {
        return view('Clients.index', [
            'Clients' => Client::get(),
    ]); 
    }

    public function create(): View
    {
        return view('Clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        dd($validated);

        $Client = new Client ([
            'name' => $requestData['name'],
            'email' => $requestData['email'],
        ]);

        $Client->save();

        return redirect()->route('Clients.show', ['client' => $Client]);

    }

    public function show(Client $Client): View
    {
        return view('Clients.show',
        ['client' => $Client,
    ]);
    }


    public function edit(Client $Client): View
    {
        return view('Clients.edit',[
            'client' => $Client,
        ]);
    }

    public function update(Request $request, Client $Client)
    {
        $requestData = $request->all();

        $Client->name = $requestData['name'];
        $Client->email = $requestData['email'];
        $Client->save();

        return redirect()->route('Clients.show', ['client' => $Client]);
    }

    public function destroy(Client $Client)
    {
        $Client->delete();
        return redirect()->route('Clients.index');

}
}