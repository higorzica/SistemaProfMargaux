<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateClient;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Client $client)
    {

        $clients = $client->all();
        // dd($clients);

        return view('admin/clients/index', compact('clients'));
    }
    public function show(string|int $id)
    {
        if (!$client = Client::find($id)) {
            return back();
        }

        return view('admin/clients/show', compact('client'));
    }

    public function create()
    {

        return view('admin/clients/create');
    }

    public function store(StoreUpdateClient $request, Client $client)
    {
       $data = $request->validated();
       if ($request->image) {
        $name = $request->image->getClientOriginalName();
        $data['image'] = $request->image->storeAs('clients', date('d-m-y') . '-' . $name);
    }
        $data['status'] = 'A';

    //    dd($data);
        $client = $client->create($data);
        
        return redirect()->route('clients.index');

    }

    public function edit(Client $client, string|int $id)
    {

        if (!$client = $client->where('id', $id)->first()) {
            return back();
        }

       return view('admin/clients.edit', compact('client'));
    }

    public function update(StoreUpdateClient $request, Client $client, string|int $id)
    {

        if (!$client = $client->find($id)) {
            return back();
        }

        $client->update($request->validated());

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client, string|int $id)
    {

        if (!$client = $client->find($id)) {
            return back();
        }

        $client->delete();

        return redirect()->route('clients.index');
    }
}
