<?php

namespace App\Http\Controllers;

use App\Models\Consumption;
use App\Models\Device;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $devices=Device::all()->where('users_id', Auth()->user()->id);
        $consumo=Consumption::all();
        return view('home', compact('devices', 'consumo'));
    }
}
