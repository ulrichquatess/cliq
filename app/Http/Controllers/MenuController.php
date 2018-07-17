<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Menu;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class MenuController extends Controller
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
        $menu = Menu::all();
        return view('admin.menus.index')->with('menus', $menu); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create');
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
               'menu_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $menu = new Menu; 

         $menu->name = $request->input('name');
         $menu->name_fr = $request->input('name_fr');
         

            //HERE WE save the image
            if($request->hasFile('menu_image')) {
                $image = $request->file('menu_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/menu/' . $filename);
                Image::make($image)->save($location);

                $menu->image = $filename; 

                $menu->save();
            }

         //save
           $menu->save();

           return redirect()->route('menu.show', $menu->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);

        return view('admin.menus.show')->with('menu', $menu);
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
        $menu = Menu::find($id);
        
        // Return the view page here
        return view('admin.menus.edit')->with('menu', $menu); 
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
        $menu = Menu::find($id);
        
             $this->validate($request, [
              'menu_image' => 'sometimes|image'
              
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $menu = Menu::find($id);

             $menu->name = $request->input('name');
             $menu->name_fr = $request->input('name_fr');
           //HERE WE are checking if someone added a photo or not
            if ($request->hasFile('menu_image')) {

               #Add new photo
                $image = $request->file('menu_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/menu/' . $filename);
                Image::make($image)->save($location);
        
                $oldFilename = $menu->image;


                //here we update the database
                $menu->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $blog->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('menu.show', $menu->id);
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
        $menu = Menu::find($id);
        Storage::delete($menu->image);

         $menu->delete();

         return redirect()->route('menu.index');
    }

}
