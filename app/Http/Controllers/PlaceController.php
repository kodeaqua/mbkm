<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Place;
use App\Models\Village;
use App\Models\Category;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $places = Place::where('deleted', false);
        $request->has('search') ? $places = $places->where('name', 'LIKE', '%' . $request->search . '%') : false;
        $places = $places->paginate(10);
        $categories = Category::where('deleted', false)->get();
        $villages = Village::where('deleted', false)->get();
        return view('dashboard.places', compact('places', 'categories', 'villages'));
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
            'name' => ['required'],
            'category_id' => ['required'],
            'address' => ['required'],
            'contact' => ['required'],
            'additional_description' => ['required'],
            'village_id' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
        ]);

        if (!$validate) {
            return redirect()->back()->withErrors($validate);
        }

        Place::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'address' => $request->address,
            'contact' => $request->contact,
            'additional_description' => $request->additional_description,
            'village_id' => $request->village_id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'is_village_mascot' => boolval($request->is_village_mascot) ? 1 : 0,
            'has_online_store' => boolval($request->has_online_store) ? 1 : 0,
            'has_smart_payment_support' => boolval($request->has_smart_payment_support) ? 1 : 0
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
        $place = Place::findOrFail($id);
        if ($place->name != $request->name && $request->name != "") {
            $place->update([
                'name' => $request->name
            ]);
        }

        if ($place->category_id != $request->category_id) {
            $place->update([
                'category_id' => $request->category_id
            ]);
        }

        if ($place->address != $request->address && $request->address != "") {
            $place->update([
                'address' => $request->address
            ]);
        }

        if ($place->contact != $request->contact && $request->contact != "") {
            $place->update([
                'contact' => $request->contact
            ]);
        }

        if ($place->additional_description != $request->additional_description && $request->additional_description != "") {
            $place->update([
                'additional_description' => $request->additional_description
            ]);
        }

        if ($place->village_id != $request->village_id) {
            $place->update([
                'village_id' => $request->village_id
            ]);
        }

        if ($place->latitude != $request->latitude && $request->latitude != "") {
            $place->update([
                'latitude' => $request->latitude
            ]);
        }

        if ($place->longitude != $request->longitude && $request->longitude != "") {
            $place->update([
                'longitude' => $request->longitude
            ]);
        }

        if ($place->is_village_mascot != $request->is_village_mascot) {
            $place->update([
                'is_village_mascot' => boolval($request->is_village_mascot) ? 1 : 0
            ]);
        }

        if ($place->has_online_store != $request->has_online_store) {
            $place->update([
                'has_online_store' => boolval($request->has_online_store) ? 1 : 0
            ]);
        }

        if ($place->has_smart_payment_support != $request->has_smart_payment_support) {
            $place->update([
                'has_smart_payment_support' => boolval($request->has_smart_payment_support) ? 1 : 0
            ]);
        }

        if ($place) {
            return redirect()->back()->with('success', 'Successfully updated');
        } else {
            return redirect()->back()->withInput()->withErrors($place);
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
            $place = Place::findOrFail($id);
            $place->update([
                'deleted' => true
            ]);
            return redirect()->back()->with('success', 'Successfully deleted');
        } catch (Throwable $th) {
            return redirect()->back()->withErrors($th);
        }
    }
}
