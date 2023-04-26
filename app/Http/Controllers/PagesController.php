<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Model\Service;
use App\Model\Customer;
use App\Model\Setting;
use App\Model\SocialMedia;
use App\Model\News;
use DB;

class PagesController extends Controller
{
    public function home()
    {
        $setting= Setting::first();
        $services= Service::all();
        $news= News::all();
        $customers= Customer::all();
        $socialMedia= SocialMedia::all();

        return view('frontend.home', compact('setting', 'services', 'customers', 'socialMedia','news'));
    }


    public function about()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();

        return view('frontend.about', compact('setting', 'socialMedia'));
    }


    public function services()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $services= Service::all();

        return view('frontend.services', compact('setting', 'socialMedia', 'services'));
    }


    public function service($id)
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $service = Service::find($id);

        return view('frontend.service', compact('setting', 'socialMedia', 'service'));
    }


    public function news()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $news= News::all();

        return view('frontend.news', compact('setting', 'socialMedia', 'news'));
    }

    public function clients()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $customers= Customer::all();

        return view('frontend.clients', compact('setting', 'socialMedia', 'customers'));
    }


    public function new($id)
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $new = News::find($id);
        
        return view('frontend.new_item', compact('setting', 'socialMedia', 'new'));
    }


    public function contact()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();

        return view('frontend.contact', compact('setting', 'socialMedia'));
    }

    public function jobs()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();

        return view('frontend.jobs', compact('setting', 'socialMedia'));
    }


    public function post(Post $post)
    {
        $stop_comment = DB :: table('settings')->where('name', 'stop_comment')->value('value');
        $post= DB::table('posts')->find($id);
        return view('content.post',compact('post','stop_comment'));
    }
    

}
