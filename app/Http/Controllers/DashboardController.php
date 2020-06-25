<?php

namespace App\Http\Controllers;
use App\Client;
Use App\service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function index()
    {
    	$Clients = Client::count();
    	$services = service::count();
        return view('dashboard.welcome', compact('Clients','services'));
        //
    }
    //
}
