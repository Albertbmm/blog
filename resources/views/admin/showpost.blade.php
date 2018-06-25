@extends('admin/layouts/app')
@section('headSection')
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}"/>
@endsection
@section('main_content')
<div class="content-wrapper">
<section class="content-header">
    <h1>
      <b>blog.albertbungaran</b>.com
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
</section>

<section class="content">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Post Table</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body ">
    <table id="tagTable" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Judul Post</th>
        <th>Subtittle Post</th>
        <th>Slug Post</th>
        <th>
          Published ?
        </th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
      </thead>
      <tbody>
        @foreach($listPost as $post)
      <tr>
        <td>{{$loop->index + 1}}</td>
        <td>{{$post->tittle}}</td>
        <td>{{$post->subtittle}}</td>
        <td>{{$post->slug}}</td>
        <td>{{$post->status}}</td>
        <td><a class="btn btn-default" href="/admin/post/{{$post->id}}/edit">update</a></td>
        <td><a class="btn btn-danger">delete</a></td>
      </tr>
       @endforeach
      </tbody>
    </table>
  </div>
    </div>

</section>
@endsection
@section('footerSection')
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#tagTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
@endsection
