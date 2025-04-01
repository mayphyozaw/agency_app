<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocalAgent;
use App\Http\Requests\UpdateLocalAgent;
use App\Models\LocalAgent;
use App\Models\Region;
use App\Models\Township;
use Illuminate\Http\Request;

class LocalAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $local_agents = LocalAgent::all();
        return view('local_agent.index', compact('local_agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $regions = Region::all();
        return view('local_agent.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalAgent $request)
    {
        if ($request->hasFile('photo')) {
            $file_photo = $request->file('photo');
            $nrc_photo_path = $file_photo->store('public/loal_agents');
        }
        $local_agent = new LocalAgent();
        $local_agent->name = $request->name;
        $local_agent->phone = $request->phone;
        $local_agent->address = $request->address;
        $local_agent->nrc = $request->nrc;
        $local_agent->photo = $nrc_photo_path ?? null;
        $local_agent->region_id = $request->region;
        $local_agent->township_id = $request->township;
        $local_agent->joindate = $request->joindate;

        $local_agent->save();

        return redirect()->route('local_agent.index')->with('success', "Local Agent Created Successfully");
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
    public function edit($id)
    {
        $local_agent = LocalAgent::findOrFail($id);
        $regions = Region::all();
        return view('local_agent.edit', compact('local_agent', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalAgent $request, $id)
    {
        if ($request->hasFile('photo')) {
            $file_photo = $request->file('photo');
            $nrc_photo_path = $file_photo->store('public/loal_agents');
        }

        $local_agent = LocalAgent::findOrFail($id);
        $local_agent->name = $request->name;
        $local_agent->phone = $request->phone;
        $local_agent->address = $request->address;
        $local_agent->nrc = $request->nrc;
        $local_agent->photo = $nrc_photo_path ?? $local_agent->photo;
        $local_agent->region_id = $request->region;
        $local_agent->township_id = $request->township;
        $local_agent->joindate = $request->joindate;

        $local_agent->update();
        return redirect()->route('local_agent.index')->with('success', "Local Agent Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local_agent = LocalAgent::findOrFail($id);
        $local_agent->delete();
        return redirect()->route('local_agent.index')->with('success', "Local Agent has been deleted Successfully");
    }
}
