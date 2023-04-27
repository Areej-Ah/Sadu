@extends('admin.index')

@section('content')



<div class="card">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url'=>aurl('settings'),'files'=>true]) !!}

        <div class="form-group">
          {!! Form::label('sitename_ar',trans('admin.sitename_ar')) !!}
          {!! Form::text('sitename_ar',setting()->sitename_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('sitename_en',trans('admin.sitename_en')) !!}
          {!! Form::text('sitename_en',setting()->sitename_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('email',trans('admin.email')) !!}
          {!! Form::email('email',setting()->email,['class'=>'form-control']) !!}
        </div>

        <br/>
        <br/>

        <div class="form-group">
            <label for="exampleInputFile">{{ trans('admin.logo') }}</label>
            <div class="input-group">
              <div class="custom-file">
                {!! Form::label('logo',trans('admin.logo'),['class'=>'custom-file-label']) !!}
                {!! Form::file('logo',['class'=>'custom-file-input']) !!}

              </div>
            </div>

            @if(!empty(setting()->logo))
              <br/>
              <div class="col-md-3 col-sm-12">
              <div class="info-box bg-light">
                <div class="info-box-content">

                <center> <img style="width:auto; height:80px;" src="{{ Storage::url(setting()->logo) }}" /></center>

                </span></span></div>
              </div>
              </div>
              <br/>
            @endif

        </div>

        <div class="form-group">
            <label for="exampleInputFile">{{ trans('admin.logo2') }}</label>
            <div class="input-group">
              <div class="custom-file">
                {!! Form::label('logo2',trans('admin.logo2'),['class'=>'custom-file-label']) !!}
                {!! Form::file('logo2',['class'=>'custom-file-input']) !!}

              </div>
            </div>

            @if(!empty(setting()->logo2))
              <br/>
              <div class="col-md-3 col-sm-12">
              <div class="info-box bg-light">
                <div class="info-box-content">

                <center> <img style="width:auto; height:80px;" src="{{ Storage::url(setting()->logo2) }}" /></center>

                </span></span></div>
              </div>
              </div>
              <br/>
            @endif

        </div>

        <div class="form-group">
            <label for="exampleInputFile">{{ trans('admin.video') }}</label>
            <div class="input-group">
              <div class="custom-file">
                {!! Form::label('video',trans('admin.video'),['class'=>'custom-file-label']) !!}
                {!! Form::file('video',['class'=>'custom-file-input']) !!}

              </div>
            </div>

            @if(!empty(setting()->video))
              <br/>
              <div class="col-md-3 col-sm-12">
              <div class="info-box bg-light">
                <div class="info-box-content">

                <center>
                <video width="auto" height="80px" controls>
                <source src="{{ Storage::url(setting()->video) }}" type="video/mp4"></video>
            </center>

                </span></span></div>
              </div>
              </div>
              <br/>
            @endif

        </div>


        <div class="form-group">
            <label for="exampleInputFile">{{ trans('admin.icon') }}</label>
            <div class="input-group">
              <div class="custom-file">
                {!! Form::label('icon',trans('admin.icon'),['class'=>'custom-file-label']) !!}
                {!! Form::file('icon',['class'=>'custom-file-input']) !!}
              </div>
            </div>

            @if(!empty(setting()->icon))
              <br/>
              <div class="col-md-3 col-sm-12">
              <div class="info-box bg-light">
                <div class="info-box-content">

                <center> <img style="width:auto; height:80px;" src="{{ Storage::url(setting()->icon) }}" /></center>

                </span></span></div>
              </div>
              </div>
              <br/>
            @endif

        </div>

        <br/>
        <br/>

        <div class="form-group">
          {!! Form::label('description_en',trans('admin.description_en')) !!}
          {!! Form::textarea('description_en',setting()->description_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('description_ar',trans('admin.description_ar')) !!}
          {!! Form::textarea('description_ar',setting()->description_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('keywords',trans('admin.keywords')) !!}
          {!! Form::textarea('keywords',setting()->keywords,['class'=>'form-control']) !!}
        </div>

        <br/>
        <br/>

        <div class="form-group">
          {!! Form::label('main_lang',trans('admin.main_lang')) !!}
          {!! Form::select('main_lang',['ar'=>trans('admin.ar'),'en'=>trans('admin.en')],setting()->main_lang,['class'=>'form-control']) !!}
        </div>

        <br/>
        <br/>

        <div class="form-group">
          {!! Form::label('status',trans('admin.status')) !!}
          {!! Form::select('status',['open'=>trans('admin.open'),'close'=>trans('admin.close')],setting()->status,['class'=>'form-control']) !!}
        </div>

        <br/>

        <div class="form-group">
          {!! Form::label('message_maintenance',trans('admin.message_maintenance')) !!}
          {!! Form::textarea('message_maintenance',setting()->message_maintenance,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('message_ar',trans('admin.message_ar')) !!}
          {!! Form::textarea('message_ar',setting()->message_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('message_en',trans('admin.message_en')) !!}
          {!! Form::textarea('message_en',setting()->message_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('vision_ar',trans('admin.vision_ar')) !!}
          {!! Form::textarea('vision_ar',setting()->vision_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('vision_en',trans('admin.vision_en')) !!}
          {!! Form::textarea('vision_en',setting()->vision_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('values_ar',trans('admin.values_ar')) !!}
          {!! Form::textarea('values_ar',setting()->values_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('values_en',trans('admin.values_en')) !!}
          {!! Form::textarea('values_en',setting()->values_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('team_experinces_ar',trans('admin.team_experinces_ar')) !!}
          {!! Form::textarea('team_experinces_ar',setting()->team_experinces_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('team_experinces_en',trans('admin.team_experinces_en')) !!}
          {!! Form::textarea('team_experinces_en',setting()->team_experinces_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('location_ar',trans('admin.location_ar')) !!}
          {!! Form::text('location_ar',setting()->location_ar,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('location_en',trans('admin.location_en')) !!}
          {!! Form::text('location_en',setting()->location_en,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_of_beneficiaries',trans('admin.beneficiaries')) !!}
          {!! Form::text('number_of_beneficiaries',setting()->number_of_beneficiaries,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_of_employees',trans('admin.employee')) !!}
          {!! Form::text('number_of_employees',setting()->number_of_employees,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('number_of_projects',trans('admin.projects')) !!}
          {!! Form::text('number_of_projects',setting()->number_of_projects,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('phone',trans('admin.phone')) !!}
          {!! Form::text('phone',setting()->phone,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('mobile',trans('admin.mobile')) !!}
          {!! Form::text('mobile',setting()->mobile,['class'=>'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}


    </div>
    <!-- /.card-body -->
  </div>






@endsection
