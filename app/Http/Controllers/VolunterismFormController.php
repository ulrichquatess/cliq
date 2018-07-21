<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Volum;
use App\Department;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class VolunterismFormController extends Controller
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
        //This is where we read all our  poVOlunterism Form
        $volun = Volum::all();
        return view('admin.volums.index')->with('voluns', $volun); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('admin.volums.create')->with('department', $department);
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
               'fname' => 'required',
               'lname' => 'required',
               'email' => 'required',
               'link' => 'required',
               'age' => 'required',
               'phone' => 'required',
               'department_id' => 'required|integer',
               'residence' => 'required',
               'content' => 'required',
               'volum_image' => 'sometimes|image|mimes:jpeg,jpg,gif,png,pneg'
          ]);

          // STORE DATA TO THE DATABASE

         $volun = new Volum; 

         $volun->fname = $request->input('fname');
         $volun->lname = $request->input('lname');
         $volun->email = $request->input('email');
         $volun->age = $request->input('age');
         $volun->link = $request->input('link');
         $volun->department_id = $request->input('department_id');
         $volun->phone = $request->input('phone');
         $volun->residence = $request->input('residence');
         $volun->content = $request->input('content');
         



            //HERE WE save the image
            if($request->hasFile('volum_image')) {
                $image = $request->file('volum_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/volum/' . $filename);
                Image::make($image)->save($location);

                $volun->image = $filename; 

                $volun->save();
            }

         //save
           $volun->save();

           return redirect()->route('volunterism.show', $volun->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volun = Volum::find($id);

        return view('admin.volums.show')->with('volun', $volun);
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
        $volun = Volum::find($id);
        $departments = Department::all();
        $cats = array();
        
        foreach ($departments as $department) {
                $cats[$department->id] = $department->name;
        }
        // Return the view page here
        return view('admin.volums.edit')->with('volun', $volun)->withDepartments($cats);; 
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
        $volun = Volum::find($id);
        
             $this->validate($request, [
              'fname' => 'required',
               'lname' => 'required',
               'email' => 'required',
               'link' => 'required',
               'age' => 'required',
               'phone' => 'required',
               'department_id' => 'required|integer',
               'residence' => 'required',
               'content' => 'required',
               'volum_image' => 'sometimes|image|mimes:jpeg,jpg,gif,png,pneg'
              
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $volun = Volum::find($id);

         $volun->fname = $request->input('fname');
         $volun->lname = $request->input('lname');
         $volun->email = $request->input('email');
         $volun->age = $request->input('age');
         $volun->link = $request->input('link');
         $volun->department_id = $request->input('department_id');
         $volun->phone = $request->input('phone');
         $volun->residence = $request->input('residence');
         $volun->content = $request->input('content');

           //HERE WE are checking if someone added a photo or not
            if ($request->hasFile('volum_image')) {

               #Add new photo
                $image = $request->file('volum_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/volum/' . $filename);
                Image::make($image)->save($location);
                
                $oldFilename = $volun->image;


                //here we update the database
                $volun->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $volun->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('volunterism.show', $volun->id);
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
        $volun = Volum::find($id);
        Storage::delete($volun->image);

         $volun->delete();

         return redirect()->route('volunterism.index');
    }

    public function volum(Request $request)
    {
        //VALIDATE DATA

        $this->validate($request, [
               'fname' => 'required',
               'lname' => 'required',
               'department_id' => 'required|integer',
               'email' => 'required',
               'link' => 'required',
               'age' => 'required',
               'phone' => 'required',
               'residence' => 'required',
               'content' => 'required',
               'volum_image' => 'sometimes|image|mimes:jpeg,jpg,gif,png,pneg'
          ]);

          // STORE DATA TO THE DATABASE

         $volun = new Volum; 

         $volun->fname = $request->input('fname');
         $volun->department_id = $request->input('department_id');
         $volun->lname = $request->input('lname');
         $volun->email = $request->input('email');
         $volun->age = $request->input('age');
         $volun->link = $request->input('link');
         $volun->phone = $request->input('phone');
         $volun->residence = $request->input('residence');
         $volun->content = $request->input('content');
         



            //HERE WE save the image
            if($request->hasFile('volum_image')) {
                $image = $request->file('volum_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/volum/' . $filename);
                Image::make($image)->save($location);

                $volun->image = $filename; 

                $volun->save();
            }

         //save
           $volun->save();

           return redirect()->route('kameroon');
    }

}
