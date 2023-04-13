@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('customers/'.$customer->id),'method' => 'put','files'=>true]) !!}


      <div class="form-group">
            {!! Form::label('name_ar', trans('admin.name_ar')) !!}
            {!! Form::text('name_ar',$customer->name_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('name_en', trans('admin.name_en')) !!}
          {!! Form::text('name_en',$customer->name_en,['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
          <label for="exampleInputFile">{{ trans('admin.logo') }}</label>
          <div class="input-group">
            <div class="custom-file">
              {!! Form::label('logo',trans('admin.logo'),['class'=>'custom-file-label']) !!}
              {!! Form::file('logo',['class'=>'custom-file-input']) !!}

            </div>
          </div>

          @if(!empty($customer->logo))
            <br/>
            <div class="col-md-3 col-sm-12">
            <div class="info-box bg-light">
              <div class="info-box-content">

              <center> <img style="width:auto; height:80px;" src="{{ Storage::url($customer->logo) }}" /></center>

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
