<?php

namespace App\Http\Controllers;
use App\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);


        return view('dashboard.clients.index', compact('clients'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.clients.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:clients',
            'description' => 'required',
            'stats' => 'required',
            'phone' => 'required',
            'datastrat' => 'required',
            'dataend' => 'required',
        ]);

        $request_data = $request->all();

       client::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('clients.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
     return view('dashboard.clients.edite', compact('client'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'stats' => 'required',
            'phone' => 'required',
            'datastrat' => 'required',
            'dataend' => 'required',
        ]);
      
        $client->title = $request->title;
        $client->description = $request->description;
        $client->stats = $request->stats;
        $client->phone = $request->phone;
        $client->datastrat = $request->datastrat;
        $client->dataend = $request->dataend;

        $client->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('clients.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $client->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('clients.index');
        //
    }
}
