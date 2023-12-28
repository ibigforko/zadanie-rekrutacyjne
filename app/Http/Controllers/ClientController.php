<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        if (!$client) {
            abort(404);
        }
        return view('client.edit', compact('client'));
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
