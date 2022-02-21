<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
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
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'ipaddress' => 'required',
            'password' => 'required'
        ]);
        auth()->user()->phones()->create($data);
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('phones.show', $data);
    }
    
    public function runningconfig(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('rest.runningconfig', $data);
    }
    
    public function networkinfo(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('rest.networkinfo', $data);
    }
    
    public function networkstats(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('rest.networkstats', $data);
    }
    
    public function calllogs(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('rest.calllogs', $data);
    }
    
    public function devicestats(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('rest.devicestats', $data);
    }
    
    public function lineinfo(Phone $phone)
    {
        $data['phone'] = $phone;
        return view('rest.lineinfo', $data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
