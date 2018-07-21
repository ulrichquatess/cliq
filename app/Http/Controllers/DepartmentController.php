<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Department;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class DepartmentController extends Controller
{

    public function __construct() { 

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
        //This is where we read all our blog post
        $department = Department::all();
        return view('admin.departments.index')->with('departments', $department); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDATE DATA

        $this->validate($request, [
               'name' => 'required'
          ]);

          // STORE DATA TO THE DATABASE

         $department = new Department; 

         $department->name = $request->input('name');

         //save
           $department->save();

           return redirect()->route('department.show', $department->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);

        return view('admin.departments.show')->with('department', $department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Assign or find the $id of each field
        $department = Department::find($id);
        
        // Return the view page here
        return view('admin.departments.edit')->with('department', $department); 
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
        $department = Department::find($id);
        
             $this->validate($request, [
              'name' => 'required'
              
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $department = Department::find($id);

             $department->name = $request->input('name');

           

            $department->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('department.show', $department->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Here we collect the $id
        $department = Department::find($id);
        Storage::delete($department->image);

         $department->delete();

         return redirect()->route('department.index');
    }

}
