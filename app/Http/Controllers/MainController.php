<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Team;
use App\Project;
use App\Client;
use App\Service;


class MainController extends Controller

	// Here we started with the English content of the side
{
    public function index(){

    	$slide = Slide::all();
    	$team = Team::all();
    	$project = Project::orderBy('created_at', 'desc')->limit(6)->get();
    	$client = Client::all();
    	$service = Service::orderBy('created_at', 'desc')->limit(6)->get();
    	return view('afrovision.index')->with('slides', $slide)->with('teams', $team)->with('projects', $project)->with('clients', $client)->with('services', $service);
    }

    // This part is said to loads the company information
    public function about() {

    	return view('afrovision.company');
    }

    public function blogs() {
    	
    	$blog = Project::paginate(5);
    	return view('afrovision.blogs')->with('blogs', $blog);
    }

    public function getSingleBlog($id){
        $blog = Project::where('id', '=', $id)->first();
        return view('afrovision.single-blog')->with('blog', $blog);
    }

    public function services() {
    	
    	$service = Service::paginate(5);
    	return view('afrovision.services')->with('services', $service);
    }

    public function getSingleService($id){
        $service = Service::where('id', '=', $id)->first();
        return view('afrovision.single-service')->with('service', $service);
    }

    public function contact() {

    	return view('afrovision.contact');
    }

    public function postContact(Request $request) {

         Mail::send(new sendMail());

         return view('afrovision.contact');
    }

    public function team() {
  		
  		$team = Team::paginate(6);
    	return view('afrovision.team')->with('teams', $team);
    }

    // End Of English Content

    //Start of French Content
     public function frenchindex(){

    	$slide = Slide::all();
    	$team = Team::all();
    	$project = Project::orderBy('created_at', 'desc')->limit(6)->get();
    	$client = Client::all();
    	$service = Service::orderBy('created_at', 'desc')->limit(6)->get();
    	return view('afrovisionfrench.index')->with('slides', $slide)->with('teams', $team)->with('projects', $project)->with('clients', $client)->with('services', $service);
    }

     // This part is said to loads the company information
    public function frenchabout() {

    	return view('afrovisionfrench.company');
    }

    public function frenchblogs() {
    	
    	$blog = Project::paginate(5);
    	return view('afrovisionfrench.blogs')->with('blogs', $blog);
    }

    public function getSingleFrenchBlog($id){
        $blog = Project::where('id', '=', $id)->first();
        return view('afrovisionfrench.single-blog')->with('blog', $blog);
    }

    public function frenchservices() {
    	
    	$service = Service::paginate(5);
    	return view('afrovisionfrench.services')->with('services', $service);
    }

    public function getSingleFrenchService($id){
        $service = Service::where('id', '=', $id)->first();
        return view('afrovisionfrench.single-service')->with('service', $service);
    }

    public function frenchcontact() {

    	return view('afrovisionfrench.contact');
    }

    public function frenchpostContact(Request $request) {

         Mail::send(new sendMail());

         return view('afrovisionfrench.contact');
    }

    public function frenchteam() {
  		
  		$team = Team::paginate(6);
    	return view('afrovisionfrench.team')->with('teams', $team);
    }
}
