<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Project;

class AdminController extends Controller
{
	public function __construct() { 

        $this->middleware('auth');
    }
    
    public function index(){
    	$blogs = Blog::InRandomOrder()->get()->take(5);
    	$projects = Blog::InRandomOrder()->get()->take(5);
    	return view('admin.dashboard.index')->with('blogs', $blogs)->with('projects', $projects);
    }
}
