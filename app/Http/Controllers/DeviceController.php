<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceType;
use Illuminate\Http\Request;

class DeviceController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices=Device::all()->where('users_id', Auth()->user()->id);

        return view('Devices.index', compact('devices'));
        // return $devices;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dt=DeviceType::all();
        return view('Devices.create', compact('dt'));
        // return $dt;
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
            'device_types_id' => 'required',
            'serial' => 'required',
            'location' => 'required',
        ]);

        $device=Device::create($request->all());

        return redirect()->route('devices.index')->with('created','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $dev=Device::FindOrFail($device->id);
        $dt=DeviceType::all();
        return view('Devices.edit', compact('dev','dt'));

        // return $dev;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $dev=Device::find($device->id);
        $dev->device_types_id=$request->get('device_types_id');
        $dev->serial=$request->get('serial');
        $dev->location=$request->get('location');
        $dev->state=$request->get('state');
        $dev->save();

        return redirect()->route('devices.index')->with('edited', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
}
