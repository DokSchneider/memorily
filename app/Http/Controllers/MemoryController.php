<?php

namespace App\Http\Controllers;

use App\Memory;
use Illuminate\Http\Request;
use App\Http\Requests\MemoryRequest;

class MemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $memories = Memory::all();
        
        return view('index', compact('memories'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemoryRequest $request)
    {
        //
        Memory::create($request->all());

        return redirect('/')->withStatus('memory created');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function edit(Memory $memory)
    {
        //
        return view('edit_memory', compact('memory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function update(MemoryRequest $request, Memory $memory)
    {
        //
        $memory->update($request->all());

        return redirect('/')->withStatus('memory updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Memory  $memory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memory $memory)
    {
        //
        $memory->delete();
        return redirect('/')->withStatus('memory deleted');
    }
}
