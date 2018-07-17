<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Page;
use Pagination;
use Image;
use Storage;


class PageController extends Controller
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
        $page = Page::all();
        return view('admin.pages.index')->with('pages', $page); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
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
               'content_fr' => 'required',
               'title_fr' => 'required',
               'page_image' => 'somtimes|image' 
          ]);


         $page = new Page; // assigns the model post to $val

         $page->title = $request->input('title');
         $page->sub_title = $request->input('sub_title');
         $page->sub_title_fr = $request->input('sub_title_fr');
         $page->content = $request->input('content');
         $page->option = $request->input('option');
         $page->option_fr = $request->input('option_fr');
         $page->option1 = $request->input('option1');
         $page->option1_fr = $request->input('option1_fr');
         $page->title_fr = $request->input('title_fr');
         $page->content_fr = $request->input('content_fr'); 

         //HERE WE save the image
            if($request->hasFile('page_image')) {
                $image = $request->file('page_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/page/' . $filename);
                Image::make($image)->save($location);

                $page->image = $filename;

                $page->save();
            }

         //save
         $page->save();

           return redirect()->route('page.show', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $page = Page::find($id);

        return view('admin.pages.show')->with('page', $page);
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
        $page = Page::find($id);
        

        // Return the view page here
        return view('admin.pages.edit')->with('page', $page);
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
               'content_fr' => 'required',
               'title_fr' => 'required',
               'page_image' => 'sometimes|image'
          ]);

         // save the data to the database NOTE :: here it is different from the other once

           $page = Page::find($id);

             $page->title = $request->input('title');
             $page->sub_title = $request->input('sub_title');
             $page->sub_title_fr = $request->input('sub_title_fr');
             $page->content = $request->input('content');
             $page->title_fr = $request->input('title_fr'); 
             $page->option = $request->input('option');
             $page->option_fr = $request->input('option_fr');
             $page->option1 = $request->input('option1');
             $page->option1_fr = $request->input('option1_fr');
             $page->content_fr = $request->input('content_fr');

                //HERE WE save the image
              if ($request->hasFile('page_image')) {

                 #Add new photo
                  $image = $request->file('page_image');
                  $filename = time() . '.' . $image->getClientOriginalExtension();
                  $location = public_path('images/page/' . $filename);
                  Image::make($image)->save($location);
              

                  $oldFilename = $page->image;


                  //here we update the database
                  $page->image = $filename;

                 # Delete the old photo
                  Storage::delete($oldFilename);
             }

            $page->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('page.show', $page->id);
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
        $page = Page::find($id);
        $page->delete();
        return redirect()->route('page.index');
    }
}
