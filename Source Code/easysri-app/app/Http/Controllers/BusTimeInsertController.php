<?php

namespace App\Http\Controllers;

use App\Models\BusTimeTable;
use domain\Facades\BusTimeInsertFacade;
use Illuminate\Http\Request;
use App\Http\Requests\BusTimeTableFormRequest;

class BusTimeInsertController extends ParentController
{
    public function bustimeinsertview()
    {
        return view('pages.admin.bustimetableinsert');
    }

    public function store(BusTimeTableFormRequest $request) {

        try {
            $data = $request->validated();
            BusTimeInsertFacade::store($request->all());
            return redirect()->back()->with('message', 'Details Added Successfully!');
        } catch (Exception $ex) {
            return redirect()->back()->with('message', 'Something went wrong' . $ex);
        }
        
    }
}
