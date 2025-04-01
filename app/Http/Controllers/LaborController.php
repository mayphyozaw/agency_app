<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabor;
use App\Http\Requests\UpdateLabor;
use App\Models\Country;
use App\Models\Labor;
use App\Models\LocalAgent;
use Illuminate\Http\Request;

class LaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labors = Labor::all();
        return view('labors.index', compact('labors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $local_agents = LocalAgent::all();
        return view('labors.create', compact('countries', 'local_agents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabor $request)
    {
        if ($request->hasFile('photo')) {
            $file_photo = $request->file('photo');
            $photo_path = $file_photo->store('public/labors');
        }

        if ($request->hasFile('nrc_front_photo')) {
            $file_photo = $request->file('nrc_front_photo');
            $nrc_front_photo_path = $file_photo->store('public/labors');
        }

        if ($request->hasFile('nrc_back_photo')) {
            $file_photo = $request->file('nrc_back_photo');
            $nrc_back_photo_path = $file_photo->store('public/labors');
        }

        if ($request->hasFile('passport_photo')) {
            $file_photo = $request->file('passport_photo');
            $passport_photo_path = $file_photo->store('public/labors');
        }

        $labor = new Labor();
        $labor->name = $request->name;
        $labor->photo = $photo_path ?? null;
        $labor->gender = $request->gender;
        $labor->phone = $request->phone;
        $labor->address = $request->address;
        $labor->nrc = $request->nrc;
        $labor->nrc_front_photo = $nrc_front_photo_path ?? null;
        $labor->nrc_back_photo = $nrc_back_photo_path ?? null;
        $labor->father_name = $request->father_name ?? null;
        $labor->mother_name = $request->mother_name ?? null;
        $labor->qualification = $request->qualification ?? null;
        $labor->date_of_birth = $request->date_of_birth ?? null;
        $labor->age = $request->age ?? null;
        $labor->passport_number = $request->passport_number;
        $labor->passport_photo = $passport_photo_path ?? null;
        $labor->passport_issue_date = $request->passport_issue_date;
        $labor->passport_expired_date = $request->passport_expired_dateassport;
        $labor->owic_card_number = $request->owic_card_number;
        $labor->passport_place = $request->passport_place;
        $labor->owic_card_issue_date = $request->owic_card_issue_date;
        $labor->owic_card_submit_date = $request->owic_card_submit_date;
        $labor->weight = $request->weight;
        $labor->height = $request->height;
        $labor->smoking = $request->smoking;
        $labor->alcohol = $request->alcohol;
        $labor->tattoo = $request->tattoo;
        $labor->nation_religion = $request->nation_religion;
        $labor->prominent_sign = $request->prominent_sign;
        $labor->working_experience = $request->working_experience;
        $labor->country = $request->country;
        $labor->agent = $request->agent;
        $labor->description = $request->description;


        $labor->save();
        return redirect()->route('labors.index')->with('success', "Labors Created Successfully");
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
        $labor = Labor::findOrFail($id);
        $countries = Country::all();
        $local_agents = LocalAgent::all();
        return view('labors.edit', compact('labor', 'countries', 'local_agents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabor $request, $id)
    {
        if ($request->hasFile('photo')) {
            $file_photo = $request->file('photo');
            $photo_path = $file_photo->store('public/labors');
        }

        if ($request->hasFile('nrc_front_photo')) {
            $file_photo = $request->file('nrc_front_photo');
            $nrc_front_photo_path = $file_photo->store('public/labors');
        }

        if ($request->hasFile('nrc_back_photo')) {
            $file_photo = $request->file('nrc_back_photo');
            $nrc_back_photo_path = $file_photo->store('public/labors');
        }

        if ($request->hasFile('passport_photo')) {
            $file_photo = $request->file('passport_photo');
            $passport_photo_path = $file_photo->store('public/labors');
        }

        $labor = Labor::findOrFail($id);
        $labor->name = $request->name;
        $labor->photo = $photo_path ?? $labor->photo;
        $labor->gender = $request->gender;

        $labor->phone = $request->phone;
        $labor->address = $request->address;
        $labor->nrc = $request->nrc;
        $labor->nrc_front_photo = $nrc_front_photo_path ?? $labor->nrc_front_photo;
        $labor->nrc_back_photo = $nrc_back_photo_path ?? $labor->nrc_back_photo;
        $labor->father_name = $request->father_name ?? null;
        $labor->mother_name = $request->mother_name ?? null;
        $labor->qualification = $request->qualification ?? null;
        $labor->date_of_birth = $request->date_of_birth ?? null;
        $labor->age = $request->age ?? null;
        $labor->passport_number = $request->passport_number;
        $labor->passport_photo = $passport_photo_path ??  $labor->passport_photo;
        $labor->passport_issue_date = $request->passport_issue_date;
        $labor->passport_expired_date = $request->passport_expired_dateassport;
        $labor->owic_card_number = $request->owic_card_number;
        $labor->passport_place = $request->passport_place;
        $labor->owic_card_issue_date = $request->owic_card_issue_date;
        $labor->owic_card_submit_date = $request->owic_card_submit_date;
        $labor->weight = $request->weight;
        $labor->height = $request->height;
        $labor->smoking = $request->smoking;
        $labor->alcohol = $request->alcohol;
        $labor->tattoo = $request->tattoo;
        $labor->nation_religion = $request->nation_religion;
        $labor->prominent_sign = $request->prominent_sign;
        $labor->working_experience = $request->working_experience;
        $labor->description = $request->description;


        $labor->update();
        return redirect()->route('labors.index')->with('success', "Labors updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
