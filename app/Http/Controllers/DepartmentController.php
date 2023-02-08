<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Departments = Department::all();
        $search = '';
        return view('Admin.Departments.index' , compact('Departments' , 'search'));
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
                'department' => 'required|max:255',
            ]);
            $Departments = new Department();
            $Departments->department = $request->department;
            $Departments->title = $request->title;
            $Departments->save();
            return redirect()->route('Departments.index')->with('message','Data added Successfully');

        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            $validated = $request->validate([
                'department' => 'required|max:255',
            ]);
            $Departments = Department::findOrFail($request->id);
            $Departments->department = $request->department;
            $Departments->title = $request->title;
            $Departments->save();
            return redirect()->route('Departments.index')->with('message','Data added Successfully');

        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $Departments = Department::findOrFail($request->id)->delete();
        return redirect()->route('Departments.index')->with('warning','Data delete Successfully');
    }

    public function search(Request $request)
    {
        $searchQuery = trim($request->search);
        $requestData = ['department','title'];

        $Departments = Department::where(function ($q) use ($requestData, $searchQuery) {
              foreach ($requestData as $field)
                  $q->orWhere($field, 'like', "%{$searchQuery}%");
          })->get();
        $search = $request->search;
          return view('Admin.Departments.index',compact('Departments' , 'search'));

    }

}
