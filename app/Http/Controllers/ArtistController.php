<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Artist;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class ArtistController extends Controller
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
        $artist = Artist::all();
        return view('admin.artists.index')->with('artists', $artist); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artists.create');
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
               'link' => 'required',
               'name' => 'required',
               'artist_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $artist = new Artist; 

         $artist->name = $request->input('name');
         $artist->link = $request->input('link');

            //HERE WE save the image
            if($request->hasFile('artist_image')) {
                $image = $request->file('artist_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/artist/' . $filename);
                Image::make($image)->save($location);


                $artist->image = $filename; 

                $artist->save();
            }

         //save
           $artist->save();

           return redirect()->route('artist.show', $artist->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);

        return view('admin.artists.show')->with('artist', $artist);
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
        $artist = Artist::find($id);
        
        // Return the view page here
        return view('admin.artists.edit')->with('artist', $artist); 
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
        $artist = Artist::find($id);
        
             $this->validate($request, [
                'link' => 'required',
                'name' => 'required',
               'artist_image' => 'image'
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $artist = Artist::find($id);

           $artist->name = $request->input('name');
           $artist->link = $request->input('link');


           //HERE WE are checking if someone added a photo or not
           if ($request->hasFile('artist_image')) {

               #Add new photo
                $image = $request->file('artist_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/artist/' . $filename);
                Image::make($image)->save($location);
                $oldFilename = $artist->image;


                //here we update the database
                $artist->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $artist->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('artist.show', $artist->id);
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
        $artist = Artist::find($id);
        Storage::delete($artist->image);

         $artist->delete();

         return redirect()->route('artist.index');
    }
}
