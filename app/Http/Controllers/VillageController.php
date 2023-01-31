<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villages = Village::where('deleted', false)->paginate(10);
        return view('dashboard.villages', compact('villages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:32'],
        ]);

        if (!$validate) {
            return redirect()->back()->withErrors($validate);
        }

        Village::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Successfully added');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $village = Village::findOrFail($id);
        if ($village->name != $request->name && $request->name != "") {
            $village->update([
                'name' => $request->name
            ]);
        }

        if ($village) {
            return redirect()->back()->with('success', 'Successfully updated');
        } else {
            return redirect()->back()->withInput()->withErrors($village);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $village = Village::findOrFail($id);
            $village->update([
                'deleted' => true
            ]);
            return redirect()->back()->with('success', 'Successfully deleted');
        } catch (Throwable $th) {
            return redirect()->back()->withErrors($th);
        }
    }
}
