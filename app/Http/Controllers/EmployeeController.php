<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDocument;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployee;
use App\Department;
use App\Designation;
use URL;
use Illuminate\Support\Facades\Hash;
use DB;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Employees    = User::all();
        $Departments  = Department::all();
        $Designations = Designation::all();
        $search = '';
        return view('Admin.Employees.index',compact('Employees' , 'Departments' ,'Designations', 'search'));
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
            $Employees->password    =  Hash::make($request->password);
            $Employees->phone       = $request->phone;
            $Employees->department_id     = $request->department_id;
            $Employees->designation_id    = $request->designation_id;
            $Employees->gender      = $request->gender;
            $Employees->joining_date      = $request->joining_date;
            $Employees->salary      = $request->salary;
            $Employees->facebook    = $request->facebook;
            $Employees->whatsapp    = $request->whatsapp;
            $Employees->linkedin    = $request->linkedin;

            if($request->file('image'))
            {
                $destinationPath = 'User/';
                $files = $request->file('image'); 
                $file_name = $files->getClientOriginalName(); 
                $files->move($destinationPath , $file_name); 
                $path =  env('APP_URL');
                $Image = $path.'/'.$destinationPath.$file_name;
                $Employees->image = $Image;

            }

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

            $validated = $request->validated();
            $Employees              = User::findOrFail($request->id);
            $Employees->name        = $request->name;
            $Employees->email       = $request->email;
            $Employees->password    = Hash::make($request->password);
            $Employees->phone       = $request->phone;
            $Employees->department_id     = $request->department_id;
            $Employees->designation_id    = $request->designation_id;
            $Employees->gender      = $request->gender;
            $Employees->joining_date      = $request->joining_date;
            $Employees->salary      = $request->salary;
            $Employees->facebook    = $request->facebook;
            $Employees->whatsapp    = $request->whatsapp;
            $Employees->linkedin    = $request->linkedin;

            if($request->file('image'))
            {
                $destinationPath = 'User/';
                $files = $request->file('image'); 
                $file_name = $files->getClientOriginalName(); 
                $files->move($destinationPath , $file_name); 
                $path =  url();
                $Image = $path.'/'.$destinationPath.$file_name;
                $Employees->image = $Image;

            }
            
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

    public function upload(Request $request)
    {
        try {
            $Employees  = User::findOrFail($request->id);
            if($request->hasFile('file'))
            {
                foreach ($request->file('file') as $file) {
                    $fileNameWithExt = $file->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                    $destinationPath = 'User/'.$Employees->name.'/';
                    $file->move($destinationPath, $fileNameToStore);
                    $path = env('APP_URL').'/'.$destinationPath.$fileNameToStore;

                    $UserDocument              =  DB::table('user_documents')->insert([
                        'path' =>  $path ,
                        'employee_id' =>  $request->id,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                    ]);
                  }
            }

            return redirect()->route('Employees.index')->with('info','Data add All Files Successfully');

        }
    catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
    }

}
