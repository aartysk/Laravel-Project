<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
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
        app()-> setLocale('en');
        return view('Clients.create');
    }

    public function store(StoreClientRequest $StoreClientrequest)
    {
        $validatedData = $StoreClientrequest->validated();
        $Client = new Client ([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
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

        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required',
        ]);

        $Client->name = $validated['name'];
        $Client->email = $validated['email'];
        
        $Client->save();

        return redirect()->route('Clients.show', ['client' => $Client]);
    }

    public function destroy(Client $Client)
    {
        $Client->delete();
        return redirect()->route('Clients.index');

}
}