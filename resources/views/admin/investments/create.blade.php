@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('investments'),'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('description_ar', trans('admin.description_ar')) !!}
            {!! Form::text('description_ar',old('description_ar'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('description_en', trans('admin.description_en')) !!}
          {!! Form::text('description_en',old('description_en'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('investment_field_ar', trans('admin.investment_field_ar')) !!}
            {!! Form::text('investment_field_ar',old('investment_field_ar'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('investment_field_en', trans('admin.investment_field_en')) !!}
          {!! Form::text('investment_field_en',old('investment_field_en'),['class'=>'form-control']) !!}
        </div>


        <br/>


         {!! Form::submit(trans('admin.create'),['class' =>'btn btn-primary' ]) !!}

    {!! Form::close() !!}


    </div>
    <!-- /.card-body -->
  </div>






@endsection
