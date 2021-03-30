@extends('admin.layouts.app')

@section('head-section')
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin//plugins/summernote/summernote-bs4.min.css')}}">
@endsection

@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Text Editors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Text Editors</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content" style="height:'200px' ">
    <div class="row">
      <div class="col-md-12">
    
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Titles</h3>
          </div>
          @include('includes/messages')

            <!-- /.card-header -->
            <!-- form start -->
          <form action="{{ route('post.update',$post->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="card-body">
              <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value=" {{ $post->title }} ">

              </div>

              <div class="form-group">
                <label for="subtitle">Post Sub Title</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Title" value=" {{ $post->subtitle }} ">
              </div>

              <div class="form-group">
                <label for="slug">Post Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug" value=" {{ $post->slug }} ">
              </div>

              <div class="form-group">
                <!-- <div class="input-group">-->
                <div class="custom-file">
                <label for="image">Choose file</label><br>
                <input type="file" id="image" name="image">
                  
                </div>
              </div><br>
              <div class="form-group">
                  <label>Tags</label>
                  <select class="select2bs4" multiple="multiple" data-placeholder="Select Tags"
                          style="width: 100%;" name="tags[]">
                          <@foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                              @foreach($post->tags as $postTag)
                                @if($postTag->id == $tag->id)
                                  selected
                                @endif
                              @endforeach
                          @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Categories</label>
                  <select class="select2bs4" multiple="multiple" data-placeholder="Select Categories"
                          style="width: 100%;" name="categories[]">
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                              @foreach($post->categories as $postCategory)
                                @if($postCategory->id == $category->id)
                                  selected
                                @endif
                              @endforeach
                          @endforeach
                  </select>
                </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1"  name="status" value="1"
                 
                @if($post->status == 1)
                    {{'checked'}}
                @endif>Publish
              </div><br>
              
              
              
              <!-- /.card-body -->
              <!-- /.card -->
              <div class="card card-outline card-info">
                <div class="card-header">
                  <h3 class="card-title">
                    Write Text Here
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body" >
                  <textarea id="summernote" placeholder="Place some text here" name="body" style="height:500px;">  {{$post->body}}                    
                  </textarea>
                </div>
              </div>
            </div>
        </div>
        <!-- /.col-->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('post.index')}}"  class="btn btn-warning">Back</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<!-- /.content -->


<!-- /.content-wrapper -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- CodeMirror -->
<script src="{{asset('admin/plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('admin/plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection
@section('footer-section')
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
$(function(){
  $('.select2').select2();

  $('.select2bs4').select2({
      theme: 'bootstrap4'
    });
});
</script>
@endsection