<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Blog;
use Session;
use Pagination;
use Purifier;
use Image;
use Storage;

class BlogController extends Controller
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
        $blog = Blog::all();
        return view('admin.blogs.index')->with('blogs', $blog); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
               'blog_image' => 'sometimes|image'
          ]);

          // STORE DATA TO THE DATABASE

         $blog = new Blog; 

         $blog->blog_title = $request->input('blog_title');
         $blog->blog_description = $request->input('blog_description');
         $blog->blog_title_fr = $request->input('blog_title_fr');
         $blog->slug = $request->input('slug');
         $blog->slug_fr = $request->input('slug_fr');
         $blog->blog_description_fr = $request->input('blog_description_fr');
         



            //HERE WE save the image
            if($request->hasFile('blog_image')) {
                $image = $request->file('blog_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/blog/' . $filename);
                Image::make($image)->save($location);

                $blog->image = $filename; 

                $blog->save();
            }

         //save
           $blog->save();

           return redirect()->route('blog.show', $blog->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.show')->with('blog', $blog);
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
        $blog = blog::find($id);
        
        // Return the view page here
        return view('admin.blogs.edit')->with('blog', $blog); 
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
        $blog = Blog::find($id);
        
             $this->validate($request, [
              'blog_image' => 'sometimes|image'
              
          ]); 
    

       // save the data to the database NOTE :: here it is different from the other once

           $blog = Blog::find($id);

             $blog->blog_title = $request->input('blog_title');
             $blog->blog_description = Purifier::clean($request->input('blog_description'));
             $blog->blog_title_fr = $request->input('blog_title_fr');
             $blog->slug = $request->input('slug');
             $blog->slug_fr = $request->input('slug_fr');
             $blog->blog_description_fr = $request->input('blog_description_fr');

           //HERE WE are checking if someone added a photo or not
            if ($request->hasFile('blog_image')) {

               #Add new photo
                $image = $request->file('blog_image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $fill = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/blog/' . $filename);
                $loca = public_path('images/blog-thumnail/' . $fill);
                Image::make($image)->save($location);
                
                $oldFilename = $blog->image;


                //here we update the database
                $blog->image = $filename; 

               # Delete the old photo
                Storage::delete($oldFilename);
           }

            $blog->save(); // this is the part that updates the changes      


        // Redirect to the post.show

            return redirect()->route('blog.show', $blog->id);
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
        $blog = Blog::find($id);
        Storage::delete($blog->image);

         $blog->delete();

         return redirect()->route('blog.index');
    }

}
