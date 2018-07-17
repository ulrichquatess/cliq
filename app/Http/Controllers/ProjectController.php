<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Project;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ProjectController extends Controller
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
        $project = Project::all();
        return view('admin.projects.index')->with('projects', $project); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
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
               'project_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $project = new Project; 

         $project->project_title = $request->input('project_title');
         $project->project_description = Purifier::clean($request->input('project_description'));
         $project->project_description_fr = Purifier::clean($request->input('project_description_fr'));
         $project->slug = $request->input('slug');
         $project->slug_fr = $request->input('slug_fr');
         $project->project_fr = $request->input('project_fr');


            //HERE WE save the image
            if($request->hasFile('project_image')) {
                $image = $request->file('project_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/project/' . $filename);
                $loca = public_path('images/project-thumnail/' . $fil);
                Image::make($image)->save($location);

                $project->image = $filename; 

                $project->save();
            }

         //save
           $project->save();

           return redirect()->route('project.show', $project->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('admin.projects.show')->with('project', $project);
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
        $project = Project::find($id);
        
        // Return the view page here
        return view('admin.projects.edit')->with('project', $project); 
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
        $project = Project::find($id);
        
             $this->validate($request, [
              'project_image' => 'sometimes|image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $project = Project::find($id);

             $project->project_title = $request->input('project_title');
             $project->project_description = Purifier::clean($request->input('project_description'));
             $project->project_description_fr = Purifier::clean($request->input('project_description_fr'));
             $project->slug = $request->input('slug');
             $project->slug_fr = $request->input('slug_fr');
             $project->project_fr = $request->input('project_fr');

           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('project_image')) {

               #Add new photo
                $image = $request->file('project_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/project/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $project->image;


                //here we update the database
                $project->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $project->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('project.show', $project->id);
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
        $project = Project::find($id);
        Storage::delete($project->image);

        $project->delete();

         return redirect()->route('project.index');
    }

}
