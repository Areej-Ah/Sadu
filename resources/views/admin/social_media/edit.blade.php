@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {!! Form::open(['url' => aurl('social_media/'.$media->id),'method' => 'put','files'=>true]) !!}


      <div class="form-group">
            {!! Form::label('name_ar', trans('admin.name_ar')) !!}
            {!! Form::text('name_ar',$media->name_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('name_en', trans('admin.name_en')) !!}
          {!! Form::text('name_en',$media->name_en,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('link', trans('admin.link')) !!}
            {!! Form::text('link',$media->link,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('icon', trans('admin.icon')) !!}
            {!! Form::text('icon',$media->icon,['class'=>'form-control']) !!}
        </div>
        @if(!empty($service->icon))
            <br/>
            <div class="col-md-3 col-sm-12">
            <div class="info-box bg-light">
              <div class="info-box-content">

              <i class="fab {{ $media->icon }}"></i>

              </span></span></div>
            </div>
            </div>
            <br/>
          @endif

        <div class="form-group">
        {!! Form::label('activation', trans('admin.activation')) !!}
        {!! Form::select('active', ['1' => trans('admin.active'), '0' => trans('admin.inactive')],$media->active,['class'=>'form-control']) !!}
       </div>


        <br/>



         {!! Form::submit(trans('admin.edit'),['class' =>'btn btn-primary' ]) !!}

    {!! Form::close() !!}


    </div>
    <!-- /.card-body -->
  </div>






@endsection
