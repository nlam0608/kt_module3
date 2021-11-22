<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agency;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::all();
        return view('agency.list', compact('agencies'));
    }

    public function create()
    {
        return view('agency.create');
    }

    public function store(Request $request)
    {
        $agency = new Agency();
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->name_manage = $request->manage;
        $agency->status = $request->status;
        $agency->save();
        return redirect()->route('agency.index');
    }

    public function edit($id)
    {
        $agencies = Agency::findOrFail($id);
        return view('agency.update',compact('agencies'));
    }

    public function update(Request $request,$id)
    {
        $agencies = Agency::findOrFail($id);
        $agencies->name = $request->name;
        $agencies->phone = $request->phone;
        $agencies->email = $request->email;
        $agencies->address = $request->address;
        $agencies->name_manage = $request->manage;
        $agencies->status = $request->status;
        $agencies->save();
        return redirect()->route('agency.index');
    }

    public function destroy($id)
    {
        $agencies = Agency::findOrFail($id);
        $agencies->delete();
        return redirect()->route('agency.index');
    }

    function search(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword) {
            return redirect()->route('agent.index');
        }
        $agencies = Agency::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);

        return view('agency.list', compact('agencies'));
    }

}
