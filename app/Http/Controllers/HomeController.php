<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Blog;
use App\Project;
use App\Artist;
use App\Service;
use Session;
use Mail;
use App\Mail\Sendmail;

class HomeController extends Controller
{
    public function sponsor()
    {
        return view('cliq/sponsor');
    }

    public function sponsorship()
    {
        return view('cliq/sponsorship');
    }

    public function cameroon()
    {
        return view('cliq/cameroon');
    }

    public function kameroon()
    {
        Session::flash('success', 'The Form Successfully Submitted');
        return view('cliq/cameroon');
    }

// Out Of Cameroon Section
    public function outcameroon()
    {
        return view('cliq/outcameroon');
    }

    public function outkameroon()
    {
        Session::flash('success', 'The Form Successfully Submitted');
        return view('cliq/outcameroon');
    }
// Ends Here    

    public function patron()
    {
        return view('cliq/patron');
    }

    public function policy()
    {
        return view('cliq/policy');
    }

    public function festival()
    {
        return view('cliq/festival');
    }

    public function consumer()
    {
        return view('cliq/consumer');
    }

    public function about()
    {
        $teams = Team::InRandomOrder()->take(3)->get();
        return view('cliq/about')->with([
                'teams' => $teams
            ]);
    }

    public function aboutcliq()
    {
        return view('cliq/aboutcliq');
    }

    public function mission()
    {
        return view('cliq/mission');
    }

    public function problem()
    {
        return view('cliq/problem');
    }

    public function events()
    {
        $events = Service::where('status', 'new')->take(2)->get();
        $services = Service::paginate(3);

        return view('cliq/event')->with([
            'events' => $events,
            'services' => $services
        ]);
    }

     public function getSingleEvent($slug){
        $event = Service::where('slug', '=', $slug)->first();
        $events = Service::InRandomOrder()->take(4)->get();
        return view('cliq.single-event')->with([
            'event' => $event,
            'events' => $events
        ]);
    }

    public function contact()
    {
        return view('cliq/contact');
    }

    public function postContact(Request $request) {

         Mail::send(new sendMail());

         return view('cliq.contact');
    }

    public function blogs()
    {
        $blogs = Blog::paginate(6);
        return view('cliq.blog')->with([
            'blogs' => $blogs 
        ]);
    }

     public function getSingleBlog($slug){
        $blog = Blog::where('slug', '=', $slug)->first();
        $blogs = Blog::InRandomOrder()->take(4)->get();
        return view('cliq.single-blog')->with([
            'blog' => $blog,
            'blogs' => $blogs
        ]);
    }

    public function projects()
    {
        $projects = Project::paginate(6);
        return view('cliq.project')->with([
            'projects' => $projects 
        ]);
    }

     public function getSingleProject($slug){
        $project = Project::where('slug', '=', $slug)->first();
        $projects = Project::InRandomOrder()->take(4)->get();
        return view('cliq.single-project')->with([
            'project' => $project,
            'projects' => $projects
        ]);
    }
    
    public function artists()
      {
        $artists = Artist::paginate(8);
        return view('cliq/artist')->with([
            'artists' => $artists
        ]);
      }

      // The Below Method Will Be Used For The French Content

    public function frenchindex()
      {
          return view('cliqfrench/index');
      }

    public function frenchaboutcliq()
      {
          return view('cliqfrench/aboutcliq');
      }

    public function frenchsponsor()
    {
        return view('cliqfrench/sponsor');
    }

    public function frenchpatron()
    {
        return view('cliqfrench/patron');
    }

    public function frenchpolicy()
    {
        return view('cliqfrench/policy');
    }

    public function frenchfestival()
    {
        return view('cliqfrench/festival');
    }

    public function frenchconsumer()
    {
        return view('cliqfrench/consumer');
    }

    public function frenchabout()
    {
        $teams = Team::InRandomOrder()->take(3)->get();
        return view('cliqfrench/about')->with([
                'teams' => $teams
            ]);
    }

    public function frenchmission()
    {
        return view('cliqfrench/mission');
    }

    public function frenchproblem()
    {
        return view('cliqfrench/problem');
    }

    public function frenchevents()
    {
        $events = Service::where('status', 'new')->take(2)->get();
        $services = Service::paginate(3);

        return view('cliqfrench/event')->with([
            'events' => $events,
            'services' => $services
        ]);
    }

     public function getSingleEventFrench($slug_fr){
        $event = Service::where('slug_fr', '=', $slug_fr)->first();
        $events = Service::InRandomOrder()->take(4)->get();
        return view('cliqfrench.single-event')->with([
            'event' => $event,
            'events' => $events
        ]);
    }

      public function frenchblogs()
    {
        $blogs = Blog::paginate(6);
        return view('cliqfrench.blog')->with([
            'blogs' => $blogs 
        ]);
    }

     public function getSingleBlogFrench($slug_fr){
        $blog = Blog::where('slug_fr', '=', $slug_fr)->first();
        $blogs = Blog::InRandomOrder()->take(4)->get();
        return view('cliqfrench.single-blog')->with([
            'blog' => $blog,
            'blogs' => $blogs
        ]);
    }

    public function frenchprojects()
    {
        $projects = Project::paginate(6);
        return view('cliqfrench.project')->with([
            'projects' => $projects 
        ]);
    }

     public function getSingleProjectFrench($slug_fr){
        $project = Project::where('slug_fr', '=', $slug_fr)->first();
        $projects = Project::InRandomOrder()->take(4)->get();
        return view('cliqfrench.single-project')->with([
            'project' => $project,
            'projects' => $projects
        ]);
    }

     public function frenchartists()
      {
        $artists = Artist::paginate(6);
        return view('cliqfrench/artist')->with([
            'artists' => $artists
        ]);
      }

}
