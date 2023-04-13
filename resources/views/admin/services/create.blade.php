@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('services'),'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name_ar', trans('admin.name_ar')) !!}
            {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('name_en', trans('admin.name_en')) !!}
          {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description_ar', trans('admin.description_ar')) !!}
            {!! Form::text('description_ar',old('description_ar'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description_en', trans('admin.description_en')) !!}
            {!! Form::text('description_en',old('description_en'),['class'=>'form-control']) !!}
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
        <br/>


         {!! Form::submit(trans('admin.create'),['class' =>'btn btn-primary' ]) !!}

    {!! Form::close() !!}


    </div>
    <!-- /.card-body -->
  </div>






@endsection
