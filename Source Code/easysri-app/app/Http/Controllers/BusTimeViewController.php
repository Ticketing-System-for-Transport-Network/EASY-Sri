<?php

namespace App\Http\Controllers;

use App\Models\BusTimeTable;
use domain\Facades\BusTimeViewFacade;
use Illuminate\Http\Request;

class BusTimeViewController extends ParentController
{
    public function bustimetableview()
    {
        $response['buss'] = BusTimeViewFacade::all();
        return view('pages.admin.bustimetableview')->with($response);

    }

    public function delete($bus_id)
    {
        BusTimeViewFacade::delete($bus_id);
        return response()->json(['status' => 'Details Deleted Successfully!']);
        //return redirect()->back()->with('message','Details Deleted Successfully!');
    }

    public function done($bus_id)
    {
        BusTimeViewFacade::done($bus_id);
        return redirect()->back();
    }

    public function edit(Request $request)
    {

        $response['bus'] = BusTimeViewFacade::get($request['bus_id']);
        return view('pages.admin.bustimetableedit')->with($response);
    }

    public function update(Request $request, $bus_id)
    {
        BusTimeViewFacade::update($request->all(), $bus_id);
        return redirect()->back()->with('message', 'Details Updated Successfully!');
    }

}
