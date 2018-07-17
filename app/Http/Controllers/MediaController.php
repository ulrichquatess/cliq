<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Media;
use Pagination;
use Image;
use Storage;


class MediaController extends Controller
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
        $media = Media::all();
        return view('admin.medias.index')->with('medias', $media); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.medias.create');
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
               'title' => 'required',
               'content' => 'required',
               'title_fr' => 'required',
               'content_fr' => 'required'
          ]);


         $media = new Media; // assigns the model post to $val

         $media->title = $request->input('title');
         $media->content = $request->input('content');
         $media->title_fr = $request->input('title_fr');
         $media->content_fr = $request->input('content_fr');
         //save
         $media->save();

           return redirect()->route('media.show', $media->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $media = Media::find($id);

        return view('admin.medias.show')->with('media', $media);
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
        $media = Media::find($id);
        

        // Return the view  here
        return view('admin.medias.edit')->with('media', $media);
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
               'title' => 'required',
               'content' => 'required',
               'title_fr' => 'required',
               'content_fr' => 'required'
          ]);

         // save the data to the database NOTE :: here it is different from the other once

           $media = Media::find($id);

             $media->title = $request->input('title');
             $media->content = $request->input('content');
             $media->title_fr = $request->input('title_fr');
             $media->content_fr = $request->input('content_fr');

            $media->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('media.show', $media->id);
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
        $media = Media::find($id);
        $media->delete();
        return redirect()->route('media.index');
    }
}
