<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatedRejectLabor;
use App\Http\Requests\UpdateRejectLabor;
use App\Models\Labor;
use Illuminate\Http\Request;

class RejectController extends Controller
{
    public function rejectPassport(Request $request, $id)
    {

        $labor = Labor::findOrFail($id);
        return view('reject.reject_passport', ['labor' => $labor]);
    }

    public function update(UpdateRejectLabor $request, $id)
    {
        $labor = Labor::findOrFail($id);
        $labor->reject_date = $request->reject_date;
        $labor->passport_number = $request->passport_number;
        $labor->description = $request->description;

        $labor->update();
        return redirect()->route('labors.index')->with('success', "Labors updated Successfully");
    }


    public function store(StoreUpdatedRejectLabor $request, $id)
    {
        $labor = Labor::findOrFail($id);
        $labor->reject_date = $request->reject_date;
        $labor->passport_number = $request->passport_number;
        $labor->description = $request->description;

        $labor->save();
        return redirect()->route('reject_lists.index')->with('success', "Labors updated Successfully");
    }
}
