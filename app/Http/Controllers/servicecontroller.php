<?php

namespace App\Http\Controllers;
use App\service;
use App\client;
use Illuminate\Http\Request;

class servicecontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$services = service::latest()->paginate(5);

        $services  = service::when($request->client_id, function ($q) use ($request) {

            return $q->where('client_id', $request->client_id);

        })->latest()->paginate(5);

       

        return view('dashboard.services.index', compact('services'));


        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = client::all();

        return view('dashboard.services.create', compact('clients'));
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
            'title' => 'required',
            'client_id' => 'required',
            'type' => 'required',
            'link' => 'required',
            'description' => 'required',
        ]);

         $request->merge([ 
        'type' => implode(',', (array) $request->get('type'))
    ]);


       service::create($request->all());

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('services.index');
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
    public function edit(service $service)
    {
        $clients = client::all();

        return view('dashboard.services.edite', compact('clients','service'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {

         $this->validate($request,[
            'title' => 'required',
            'client_id' => 'required',
            'type' => 'required',
            'link' => 'required',
            'description' => 'required',
        ]);

          $request->merge([ 
        'type' => implode(',', (array) $request->get('type'))
    ]);
      
        $service->title = $request->title;
        $service->client_id = $request->client_id;
        $service->type = $request->type;
        $service->link = $request->link;
        $service->description = $request->description;

        $service->save();
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('services.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
         $service->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('services.index');
        //
        //
    }
}
