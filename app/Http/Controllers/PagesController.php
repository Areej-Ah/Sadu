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
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();
        //$news= News::take(4)->get();
        $news= Db::table('news')->where('active', '=', '1')->take(4)->get();
        //$customers= Customer::all();
        $customers = Db::table('customers')->where('show', '=', '1')->get();
        $socialMedia= SocialMedia::all();

        return view('frontend.home', compact('setting', 'services', 'customers', 'socialMedia','news'));
    }


    public function about()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.about', compact('setting', 'socialMedia', 'services'));
    }


    public function services()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.services', compact('setting', 'socialMedia', 'services'));
    }


    public function service($id)
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $service = Service::find($id);
        $services= Service::all();

        return view('frontend.service', compact('setting', 'socialMedia', 'service', 'services'));
    }


    public function news()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        //$news= News::all();
        $news= Db::table('news')->where('active', '=', '1')->get();
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.news', compact('setting', 'socialMedia', 'news', 'services'));
    }

    public function clients()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        //$customers= Customer::all();
        $customers= Db::table('customers')->where('active', '=', '1')->get();
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.clients', compact('setting', 'socialMedia', 'customers', 'services'));
    }


    public function new($id)
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        $new = News::find($id);
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.new_item', compact('setting', 'socialMedia', 'new', 'services'));
    }


    public function contact()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.contact', compact('setting', 'socialMedia', 'services'));
    }

    public function jobs()
    {
        $setting= Setting::first();
        $socialMedia= SocialMedia::all();
        //$services= Service::all();
        $services= Db::table('services')->where('active', '=', '1')->get();

        return view('frontend.jobs', compact('setting', 'socialMedia', 'services'));
    }

}
