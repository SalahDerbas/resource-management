<?php

namespace App\Http\Controllers;

use App\Designation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Designations = Designation::all();
        $search = '';
        return view('Admin.Designations.index' , compact('Designations' , 'search'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'designation' => 'required|max:255',
            ]);
            $Designation = new Designation();
            $Designation->designation = $request->designation;
            $Designation->title = $request->title;
            $Designation->save();
            return redirect()->route('Designations.index')->with('message','Data added Successfully');

        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

  
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'designation' => 'required|max:255',
            ]);
            $Designation = Designation::findOrFail($request->id);
            $Designation->designation = $request->designation;
            $Designation->title = $request->title;
            $Designation->save();
            return redirect()->route('Designations.index')->with('message','Data updated Successfully');
    
           }
           catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Designation = Designation::findOrFail($request->id)->delete();
        return redirect()->route('Designations.index')->with('warning','Data delete Successfully');
    }

    public function search(Request $request)
    {
        $searchQuery = trim($request->search);
        $requestData = ['designation','title'];

        $Designations = Designation::where(function ($q) use ($requestData, $searchQuery) {
              foreach ($requestData as $field)
                  $q->orWhere($field, 'like', "%{$searchQuery}%");
          })->get();
        $search = $request->search;
          return view('Admin.Designations.index',compact('Designations' , 'search'));

    }

}
