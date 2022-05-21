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
        $requestData = $request->all();

        $client = new Client([
            'name' => $requestData['name'],
            'email' => $requestData['email'],
        ]);
        $client->save();

        return redirect()->route('clients.show', ['client' => $client]);
    }

    public function show(Client $client): View
    {
        return view('Clients.show',
        ['client' => $client,
    ]);
    }


    public function edit(Client $client): View
    {
        return view('Clients.edit',[
            'client' => $client,
        ]);
    }

    public function update(Request $request, Client $client)
    {
        $requestData = $request->all();

        $client->name = $requestData['name'];
        $client->email = $requestData['email'];
        $client->save();

        return redirect()->route('clients.show', ['client' => $client]);
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');

}
}