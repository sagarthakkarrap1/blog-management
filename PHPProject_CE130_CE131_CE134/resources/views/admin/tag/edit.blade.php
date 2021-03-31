@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <form action="{{ route('tag.update',$tag->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="tag">Post Tag</label>
                    <input type="text" class="form-control" id="tag" name="name" placeholder="Enter Tag" value="{{ $tag->name }}">
                  </div>


                  <div class="form-group">
                    <label for="tag_slug">Post Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug" value="{{ $tag->slug }}">
                  </div>

                </div>
                  
                <!-- /.card-body -->

                 <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('tag.index')}}"  class="btn btn-warning">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col-->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

@section('footer-section')
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