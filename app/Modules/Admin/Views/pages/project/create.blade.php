@extends('Admin::layouts.main-layout')

@section('link')
    <button class="btn btn-primary" onclick="submitForm();">Save</button>
@stop

@section('title','Create Project')

@section('content')
    <div class="row">
      <div class="col-sm-12">
        <form method="POST" action="{{route('admin.project.store')}}" id="form" role="form" class="form-horizontal">
          {{Form::token()}}
          <div class="form-group">
            <label class="col-md-2 control-label">Video ID</label>
            <div class="col-md-10">
              <input type="text" required="" placeholder="Video ID" id="subject" class="form-control" name="video_id">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
              <div class="wrap-panel">
                <ul class="nav nav-tabs nav-justified custom-nav">
                  <li class="active"><a href="#title_en" data-toggle="tab"><b>EN</b></a></li>
                  <li><a href="#title_vi" data-toggle="tab"><b>VN</b></a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom">
                  <div class="tab-pane fade active in" id="title_en">
                    <input type="text" required="" placeholder="Title EN" id="title" class="form-control" name="title_en">
                  </div>
                  <div class="tab-pane fade" id="title_vi">
                    <input type="text" required="" placeholder="Title VI" id="title" class="form-control" name="title_vi">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label" for="description">Description</label>
            <div class="col-md-10">
              <div class="wrap-panel">
                <ul class="nav nav-tabs nav-justified custom-nav">
                  <li class="active"><a href="#description_en" data-toggle="tab"><b>EN</b></a></li>
                  <li><a href="#description_vi" data-toggle="tab"><b>VN</b></a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom">
                  <div class="tab-pane fade active in" id="description_en">
                    <textarea required="" class="form-control my-editor" placeholder="Description EN" rows="15" name="description_en"></textarea>
                  </div>
                  <div class="tab-pane fade" id="description_vi">
                    <textarea required="" class="form-control my-editor" placeholder="Description VI" rows="15" name="description_vi"></textarea>
                  </div>
                </div>
              </div>

            </div>
          </div>
          {{-- <div class="form-group">
            <label class="col-md-2 control-label">Image:</label>
            <div class="col-md-10">
                <div class="input-group">
                 <span class="input-group-btn">
                   <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                     <i class="fa fa-picture-o"></i> Choose
                   </a>
                 </span>
                 <input id="thumbnail" class="form-control" type="hidden" name="img_url">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
          </div> --}}
        </form>
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
