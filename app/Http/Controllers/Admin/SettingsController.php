<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Model\Setting;


class SettingsController extends Controller {

	public function setting() {
		return view('admin.settings', ['title' => trans('admin.settings')]);
	}

	public function setting_save(Request $request) {


		$validator = $this->validate(request(),[

			'logo' => validate_image(),
			'icon' => validate_image()], [],
			[
			'logo' => trans('admin.logo'),
			'icon' => trans('admin.icon')
			]);

	    $data=request()->except(['_token', '_method']);


		session()->forget('lang');

		if(request()->hasFile('logo'))
		{
			$data['logo']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'logo',
				'path'        => 'settings',
				'upload_type' => 'single',
				'delete_file' => setting()->logo
			]);
		}

		if(request()->hasFile('icon'))
		{
			$data['icon']=up()->upload([

		    	//	'new_name'    => '',
				'file'        => 'icon',
				'path'        => 'settings',
				'upload_type' => 'single',
				'delete_file' => setting()->icon
			]);
		}

		Setting::orderBy('id', 'desc')->update($data);
		session()->put('lang',$data['main_lang']);
		session()->flash('success', trans('admin.record_edited'));
		return redirect(aurl('settings'));
	}
}
