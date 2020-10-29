<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use DB;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();
        return view('meals.index', ['meals' => $meals]);
    }

    public function search(Request $request) {
        $search = $request->search;
        $meals = Meal::where('name', 'LIKE', '%'.$search.'%');
        dd($meals);
        return view('meals.search', ['meals' => $meals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required'
        ]);        

        try {
            Meal::create($request->all());
        } catch (\Exception $e) {
            return back()->withInput()->with('nameUniqueException', 'Error: Seems like theres a Meal with the same name!');
        }
        

        return redirect()->route('meals.index')->with('success','Meal created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return view('meals.show',compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        return view('meals.edit',compact('meal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        try {
            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'description' => 'required',
                'date' => 'required',
                'time' => 'required'
            ]);        
    
            Meal::where('id', $meal->id)->update($request->except(['_token', '_method']));
    
            return redirect()->route('meals.index')->with('success','Meal updated successfully.');
        } catch (\Exception $e){
            return back()->withInput()->with('nameUniqueException', 'Error: Seems like theres a Meal with the same name!');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();
  
        return redirect()->route('meals.index')->with('success','Meal deleted successfully');
    }
}
