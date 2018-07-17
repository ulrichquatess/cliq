<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Team;
use Pagination;
use Purifier;
use Image;
use Storage;


class TeamController extends Controller
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
        $team = Team::all();
        return view('admin.teams.index')->with('teams', $team); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
               'team_image' => 'sometimes|image'
          ]);


         $team = new Team; // assigns the model post to $val

         $team->name = $request->input('name');
         $team->position = $request->input('position');
         $team->position_fr = $request->input('position_fr');  
         $team->gmail = $request->input('gmail');
         $team->twitter = $request->input('twitter');
         $team->linkedin = $request->input('linkedin');
         $team->facebook = $request->input('facebook');   

         //HERE WE save the image
            if($request->hasFile('team_image')) {
                $image = $request->file('team_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/team/' . $filename);
                Image::make($image)->save($location);

                $team->image = $filename;

                $team->save();
            }

         $team->save();

           return redirect()->route('team.show', $team->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $team = Team::find($id);

        return view('admin.teams.show')->with('team', $team);
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
        $team = Team::findorFail($id);
        

        // Return the view page here
        return view('admin.teams.edit')->with('team', $team);
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
        
         $this->validate($request, [
               'name' => 'required',
               'team_image' => 'sometimes|image'
          ]);

         // save the data to the database NOTE :: here it is different from the other once

         $team = Team::find($id);

         $team->name = $request->input('name');
         $team->position = $request->input('position');
         $team->position_fr = $request->input('position_fr'); 
         $team->gmail = $request->input('gmail');
         $team->twitter = $request->input('twitter');
         $team->linkedin = $request->input('linkedin');
         $team->facebook = $request->input('facebook');
              

              //HERE WE save the image
            if ($request->hasFile('team_image')) {

               #Add new photo
                $image = $request->file('team_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/team/' . $filename);
                Image::make($image)->save($location);
            

                $oldFilename = $team->image;


                //here we update the database
                $team->image = $filename;

               # Delete the old photo
                Storage::delete($oldFilename);
           }


            $team->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('team.show', $team->id);
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
        $team = Team::find($id);
        Storage::delete($team->image);

        $team->delete();

        return redirect()->route('team.index');
    }
}
