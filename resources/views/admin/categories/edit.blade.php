@extends('admin.index')

@section('content')
@push('js')
<script type="text/javascript">
$(document).ready(function(){

  $('#jstree').jstree({
    "core" : {
      'data' : {!! load_dep($category->parent,$category->id) !!},
      "themes" : {
        "variant" : "large"
      }
    },
    "checkbox" : {
      "keep_selected_style" : false
    },
    "plugins" : [ "wholerow" ]
  });

});

 $('#jstree').on('changed.jstree',function(e,data){
    var i , j , r = [];
    for(i=0,j = data.selected.length;i < j;i++)
    {
        r.push(data.instance.get_node(data.selected[i]).id);
    }
    $('.parent_id').val(r.join(', '));
});

</script>
@endpush


<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('categories/'.$category->id),'method' => 'put','files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('name_ar', trans('admin.name_ar')) !!}
            {!! Form::text('name_ar',$category->name_ar,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('name_en', trans('admin.name_en')) !!}
          {!! Form::text('name_en',$category->name_en,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          <br/>
          {!! Form::label('category', trans('admin.category')) !!}
            <div class="clearfix"></div>
            <div id="jstree"></div>
            <input type="hidden" name="parent" class="parent_id" value="{{ $category->parent }}">
            <div class="clearfix"></div>
            <br/>
        </div>


        <div class="form-group">
          {!! Form::label('description',trans('admin.description_ar')) !!}
          {!! Form::textarea('description_ar',$category->description_ar,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('description',trans('admin.description_en')) !!}
          {!! Form::textarea('description_en',$category->description_en,['class'=>'form-control']) !!}
        </div>


       <div class="form-group">
          {!! Form::label('keyword',trans('admin.keyword')) !!}
          {!! Form::textarea('keyword',$category->keyword,['class'=>'form-control']) !!}
       </div>


       <div class="form-group">
        {!! Form::label('activation', trans('admin.activation')) !!}
        {!! Form::select('active', ['1' => trans('admin.active'), '0' => trans('admin.inactive')],$category->active,['class'=>'form-control']) !!} 
       </div>


       <div class="form-group">
        {!! Form::label('attribute_family_id', trans('admin.attribute_family_id')) !!}
        {!! Form::select('attribute_family_id',App\Model\AttributeFamily::pluck('name_'.session('lang'),'id'),$category->attribute_family_id,['class'=>'form-control']) !!}
       </div>


        <div class="form-group">
          <label for="exampleInputFile">{{ trans('admin.icon') }}</label>
          <div class="input-group">
            <div class="custom-file">
              {!! Form::label('icon',trans('admin.icon'),['class'=>'custom-file-label']) !!}
              {!! Form::file('icon',['class'=>'custom-file-input']) !!}
             
            </div>
          </div>

          @if(!empty($category->icon))
            <br/>
            <div class="col-md-3 col-sm-12">
            <div class="info-box bg-light">
              <div class="info-box-content">
              
              <center> <img style="width:auto; height:80px;" src="{{ Storage::url($category->icon) }}" /></center>
              
              </span></span></div>
            </div>
            </div>
            <br/>
          @endif

        </div>


  

        <br/>


        
         {!! Form::submit(trans('admin.edit'),['class' =>'btn btn-primary' ]) !!}
        
    {!! Form::close() !!}
  

    </div>
    <!-- /.card-body -->
  </div>


  
  


@endsection