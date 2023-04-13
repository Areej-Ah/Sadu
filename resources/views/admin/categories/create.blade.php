@extends('admin.index')

@section('content')

@push('js')
<script type="text/javascript">
$(document).ready(function(){

  $('#jstree').jstree({
    "core" : {
      'data' : {!! load_dep(old('parent')) !!},
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
    {!! Form::open(['url' => aurl('categories'),'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name_ar', trans('admin.name_ar')) !!}
            {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('name_en', trans('admin.name_en')) !!}
          {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
        </div>

        <br/>
        <div class="form-group">
          {!! Form::label('category', trans('admin.category')) !!}
          <div class="clearfix"></div>
          <div id="jstree"></div>
          <input type="hidden" name="parent" class="parent_id" value="{{ old('parent') }}">
          <div class="clearfix"></div>
        </div>
        <br/>

       

        <div class="form-group">
            {!! Form::label('description', trans('admin.description_ar')) !!}
            {!! Form::textarea('description_ar',old('description_ar'),['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('description', trans('admin.description_en')) !!}
          {!! Form::textarea('description_en',old('description_en'),['class'=>'form-control']) !!}
        </div>
        

        <div class="form-group">
          {!! Form::label('keyword', trans('admin.keyword')) !!}
          {!! Form::textarea('keyword',old('keyword'),['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          {!! Form::label('activation', trans('admin.activation')) !!}
          {!! Form::select('active', ['1' => trans('admin.active'), '0' => trans('admin.inactive')],old('activation'),['class'=>'form-control']) !!} 
        </div>


        <div class="form-group">
          {!! Form::label('attribute_family_id', trans('admin.attribute_family_id')) !!}
          {!! Form::select('attribute_family_id',App\Model\AttributeFamily::pluck('name_'.session('lang'),'id'),old('attribute_family_id'),['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
          <label for="exampleInputFile">{{ trans('admin.icon') }}</label>
          <div class="input-group">
            <div class="custom-file">
              {!! Form::label('icon',trans('admin.icon'),['class'=>'custom-file-label']) !!}
              {!! Form::file('icon',['class'=>'custom-file-input']) !!}
             
            </div>
          </div>        
        </div>

        
         {!! Form::submit(trans('admin.create'),['class' =>'btn btn-primary' ]) !!}
        
    {!! Form::close() !!}
  

    </div>
    <!-- /.card-body -->
  </div>


  
  


@endsection