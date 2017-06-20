@extends('Admin::layouts.main-layout')

@section('link')
    <button class="btn btn-primary" onclick="submitForm();">Save</button>
@stop

@section('title','Information Home Page')

@section('content')
    @if(Session::has('error'))
    <div class="alert alert-danger alert-dismissable">
      <p>{{Session::get('error')}}</p>
    </div>
    @endif
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissable">
      <p>{{Session::get('success')}}</p>
    </div>
    @endif
    <div class="row">
      <div class="col-sm-12">
        @if(!$inst)
        <form method="POST" action="{{route('admin.home.createOrUpdate')}}" id="form" role="form" class="form-horizontal">
          {{Form::token()}}
          <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Title" id="title" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Video ID</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Video ID" id="subject" class="form-control" name="video_id">
            </div>
          </div>
        </form>
        @else
        <form method="POST" action="{{route('admin.home.createOrUpdate', $inst->id)}}" id="form" role="form" class="form-horizontal">
          {{Form::token()}}
          <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Title" id="title" class="form-control" name="title" value="{{$inst->title}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Video ID</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Video ID" id="subject" class="form-control" name="video_id" value="{{ $inst->videos()->first()->video_id }}">
            </div>
          </div>
        </form>
        @endif
      </div>
    </div>
@endsection

@section('script')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('public')}}/vendor/laravel-filemanager/js/lfm.js"></script>
    <script src="{{asset('public/assets/admin/dist/js/script.js')}}"></script>
    <script>
        const url = "{{url('/')}}"
        init_tinymce(url);
        // BUTTON ALONE
        init_btnImage(url,'#lfm');
        // SUBMIT FORM
        function submitForm(){
         $('form').submit();
        }
    </script>
@stop
