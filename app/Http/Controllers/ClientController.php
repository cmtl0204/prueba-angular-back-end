<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $data = Client::get();
        response()->json($data);
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input('name');
        $client->address = $request->input('address');
        $client->birthdate = $request->input('birthdate');
        $client->save();

        response()->json($client);
    }

    public function show(Client $client)
    {
        response()->json($client);
    }

    public function update(Request $request, Client $client)
    {
        $client->name = $request->input('name');
        $client->address = $request->input('address');
        $client->birthdate = $request->input('birthdate');
        $client->save();

        response()->json($client);
    }

    public function destroy(Client $client)
    {
        $client->delete();

        response()->json(['rta' => true]);
    }
}
