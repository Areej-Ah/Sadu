<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use DB;
use Carbon\Carbon;

class CategoriesController extends Controller
{
    
    public function index()
    { 
        return view('admin.categories.index',['title'=>trans('admin.categories')]); 

    }



    public function create()
    {
      return view('admin.categories.create',['title'=>trans('admin.create')]); 
    }


    public function store()
    {
        $data = $this->validate(request(),
        [
            'name_en'        => 'required',
            'name_ar'        => 'required',
            'active'         => 'required',
            'parent'         => 'sometimes|nullable',
            'description_ar' => 'sometimes|nullable',
            'description_en' => 'sometimes|nullable',
            'keyword'        => 'sometimes|nullable',
            'icon'           => 'sometimes|nullable|'.validate_image(),
            
        ],[],[

            'name_en'        => trans('admin.name_en'),
            'name_ar'        => trans('admin.name_ar'),
            'active'         => trans('admin.active'),
            'parent'         => trans('admin.parent'),
            'description_ar' => trans('admin.description_ar'),
            'description_en' => trans('admin.description_en'),
            'keyword'        => trans('admin.keyword'),
            'icon'           => trans('admin.icon'),
        ]
        
        );

        if(request()->hasFile('icon'))
		{
			$data['icon']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'icon',
				'path'        => 'public/categories',
                'upload_type' => 'single',
                'delete_file' => '',
			]);
		}

        Category::create($data);
        session()->flash('success',trans('admin.record_added'));
        return redirect(aurl('categories'));

     
    }



    public function show($id)
    {

       
    }


    public function edit(Category $category)
    {
        $title=trans('admin.edit'); 
        return view('admin.categories.edit',compact('category','title'));
       
    }


    public function update(Category $category, Request $request)
    {
        $data = $this->validate(request(),
        [
            'name_en'        => 'required',
            'name_ar'        => 'required',
            'active'         => 'required',
            'parent'         => 'sometimes|nullable',
            'description_ar' => 'sometimes|nullable',
            'description_en' => 'sometimes|nullable',
            'keyword'        => 'sometimes|nullable',
            'icon'           => 'sometimes|nullable|'.validate_image(),
            
        ],[],[

            'name_en'        => trans('admin.name_en'),
            'name_ar'        => trans('admin.name_ar'),
            'active'         => trans('admin.active'),
            'parent'         => trans('admin.parent'),
            'description_ar' => trans('admin.description_ar'),
            'description_en' => trans('admin.description_en'),
            'keyword'        => trans('admin.keyword'),
            'icon'           => trans('admin.icon'),
        ]
        
        );

        if(request()->hasFile('icon'))
		{
			$data['icon']=up()->upload([

			    //	'new_name'    => '',
				'file'        => 'icon',
				'path'        => 'categories',
                'upload_type' => 'single',
                'delete_file' => Category::find($category->id)->icon
			]);
		}
        
        Category::where('id',$category->id)->update($data);
        session()->flash('success',trans('admin.record_edited'));
        return redirect(aurl('categories'));
       
    }



	public static function delete_parent(Category $category) {

        $category_parent = Category::where('parent', $category->id)->get();
        
        foreach ($category_parent as $sub) 
        {
			self::delete_parent($sub);
			if (!empty($sub->icon)) {
				Storage::has($sub->icon)?Storage::delete($sub->icon):'';
            }
            
			if (!empty($sub)) {
				$sub->delete();
			}
        }
        

		if (!empty($category->icon)) {
			Storage::has($category->icon)?Storage::delete($category->icon):'';
        }
        
		$category->delete();
    }
    

	public function destroy(Category $category) {
		self::delete_parent($category);
        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('categories'));
	}









    public function multi_delete()
    {   
        
        if(is_array(request('item')))
        {          
            foreach (request('item') as  $id)
             {
                $category=Category::find($id);
                Storage::delete($category->icon);
                $category->delete();
             }
        }
        else
        {
            $category=Category::find(request('item'));
            Storage::delete($category->icon);
            $category->delete();
        }


        session()->flash('success',trans('admin.record_deleted'));
        return redirect(aurl('categories'));
    }




}
