<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('deleted', false)->paginate(10);
        return view('dashboard.categories', compact('categories'));
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
            'value' => ['required', 'numeric'],
            'severity' => ['required']
        ]);

        if (!$validate) {
            return redirect()->back()->withErrors($validate);
        }

        Category::create([
            'name' => $request->name,
            'value' => $request->value,
            'severity' => $request->severity
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
        $category = Category::findOrFail($id);
        if ($category->name != $request->name && $request->name != "") {
            $category->update([
                'name' => $request->name
            ]);
        }

        if ($category->value != $request->value && $request->value != "") {
            $category->update([
                'value' => doubleval($request->value)
            ]);
        }

        if ($category->severity != $request->severity) {
            $category->update([
                'severity' => $request->severity
            ]);
        }
        if ($category) {
            return redirect()->back()->with('success', 'Successfully updated');
        } else {
            return redirect()->back()->withInput()->withErrors($category);
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
            $category = Category::findOrFail($id);
            $category->update([
                'deleted' => true
            ]);
            return redirect()->back()->with('success', 'Successfully deleted');
        } catch (Throwable $th) {
            return redirect()->back()->withErrors($th);
        }
    }
}
