<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Employees = User::all();
        $search = '';
        return view('Admin.Employees.index',compact('Employees' , 'search'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreEmployee $request)
    {
        try {
            $validated = $request->validated();
            $Employees              = new User();
            $Employees->name        = $request->name;
            $Employees->email       = $request->email;
            $Employees->password    = $request->password;

            $Employees->save();
            return redirect()->route('Employees.index')->with('message','Data added Successfully');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(StoreEmployee $request)
    {
        try {

            $Employees              = User::findOrFail($request->id);
            $Employees->name        = $request->name;
            $Employees->email       = $request->email;
            $Employees->password    = $request->password;
            $Employees->save();

            return redirect()->route('Employees.index')->with('info','Data update Successfully');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        $Employees = User::findOrFail($request->id)->delete();
        return redirect()->route('Employees.index')->with('warning','Data delete Successfully');

    }

    public function search(Request $request)
    {
        $searchQuery = trim($request->search);
        $requestData = ['name','email'];

        $Employees = User::where(function ($q) use ($requestData, $searchQuery) {
              foreach ($requestData as $field)
                  $q->orWhere($field, 'like', "%{$searchQuery}%");
          })->get();
        $search = $request->search;
          return view('Admin.Employees.index',compact('Employees' , 'search'));



    }

}
