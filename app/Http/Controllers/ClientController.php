<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientLogoRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ClientRequest;
use App\Models\ClientLogo;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request, $id = null)
    {
        if ($id) {
            $client = Client::find($id);
            if (!$client) {
                abort(404);
            }
        } else {
            $client = new Client();
        }

        $client->fill($request->post());

        $logo = null;

        if ($request->logo) {
            if ($client->logo) {
                Storage::delete('public/' . $client->logo);
            }
            if ($request->logo->store('public')) {
                $logo = $request->logo->hashName();
            }
        }

        if ($logo) {
            $client->logo = $logo;
        }

        $client->save();

        Session::flash('success_message', 'Dane zostały zapisane');

        return redirect()->route('client-index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', [
            'client' => $client->load('logos')
        ]);
    }

    public function addLogo(ClientLogoRequest $request, Client $client)
    {
        $request->actualise();

        return back();
    }

    public function deleteLogo(Client $client, ClientLogo $logo)
    {
        $logo->delete();
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            abort(404);
        }
        if ($client->logo) {
            Storage::delete('public/' . $client->logo);
        }
        $client->delete();
        return back();
    }
}
