@extends('admin/layouts/app')

@section('head-section')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
@endsection


@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Posts</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <a class='btn btn-success' href="{{route('post.create')}}">Add New</a>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                @if(count($posts)>0)
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Title</th>
                        <th>Sub-Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($posts as $post)
                      <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->subtitle}}</td>
                        <td>{{$post->slug}}</td>
                        <td>{{$post->created_at}}</td>
                        <td><a href="{{ route('post.edit',$post->id) }}">Edit</a></td>
                        <form id="delete-form-{{$post->id}}" method="post" action="{{ route('post.destroy',$post->id) }}"  sytle="display:none"> 
                        {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        </form>
                        <td><a href="" onclick="
                        if(confirm('Are you sure, You Want to delete this? '))
                        {
                          event.preventDefault();document.getElementById('delete-form-{{$post->id}}').submit();
                        }
                        else
                        {
                          event.preventDefault();
                        }
                        ">Delete</a></td>

                      </tr>
                      @endforeach
                      
                      </tbody>
                      <tfoot>
                      <th>Sr.No.</th>
                        <th>Title</th>
                        <th>Sub-Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tfoot>
                    </table>
                @else
                      <h3>No posts, yet!!</h3>
                @endif
              </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('footer-section')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable(
    //   {
    //   "responsive": true, "lengthChange": false, "autoWidth": false,
    //   // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }
    )
    // .buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
@endsection