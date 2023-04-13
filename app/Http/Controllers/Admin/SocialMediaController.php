<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SocialMedia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use Carbon\Carbon;
use App\DataTables\SocialMediaDatatable;

class SocialMediaController extends Controller
{

    public function index(SocialMediaDatatable $media)
    {
        return $media->render('admin.social_media.index',['title'=>trans('admin.social_media')]);
    }



    public function create()
    {
      return view('admin.social_media.create',['title'=>trans('admin.create')]);
    }


    public function store()
    {
        $data = $this->validate(request(),
        [
            'name_en' => 'required',
            'name_ar' => 'required',
            'icon' => 'nullable',
            'link'    => 'required',
            'active'  => 'required',

        ],[],[

            'name_en' => trans('admin.name_en'),
            'name_ar' => trans('admin.name_ar'),
            'link'    => trans('admin.link'),
            'icon'    => trans('admin.icon'),
            'active'    => trans('admin.active'),
        ]

        );



        SocialMedia::create($data);
        session()->flash('success',trans('admin.record_added'));
        return redirect(aurl('social_media'));


    }



    public function show($id)
    {


    }


    public function edit(SocialMedia $media)
    {
        $title=trans('admin.edit');
        return view('admin.social_media.edit',compact('media','title'));

    }


    public function update(SocialMedia $media, Request $request)
    {
        $data = $this->validate(request(),
        [
            'name_en' => 'required',
            'name_ar' => 'required',
            'icon' => 'nullable',
            'link'    => 'required',
            'active'  => 'required',

        ],[],[

            'name_en' => trans('admin.name_en'),
            'name_ar' => trans('admin.name_ar'),
            'link'    => trans('admin.link'),
            'icon'    => trans('admin.icon'),
            'active'    => trans('admin.active'),
        ]

        );



        SocialMedia::where('id',$media->id)->update($data);
        session()->flash('success',trans('admin.record_edited'));
        return redirect(aurl('social_media'));

    }



    public function destroy(SocialMedia $media)
    {

        $media->delete();
        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('social_media'));
    }



    public function multi_delete()
    {

        if(is_array(request('item')))
        {
            foreach (request('item') as  $id)
             {
                $media=SocialMedia::find($id);
                $media->delete();
             }
        }
        else
        {
            $media=SocialMedia::find(request('item'));
            $media->delete();
        }


        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('social_media'));
    }




}
