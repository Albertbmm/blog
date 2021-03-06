@extends('admin/layouts/app')
<!--------

UNTUK MEMBUAT POST
-->
@section('main_content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
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

  <!-- Main content -->
  <section class="content">
    <div class="row">
      @if(count($errors) > 0)
        <div class="col-md-12" >
          <p class="alert alert-danger">
              {{$errors}}
          </p>
            </div>
      @endif
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Blog Post</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form"  method="post" action="{{route('post.store')}}" >
            {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label for="tittle">Judul Post</label>
                <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Judul Post">
              </div>
              <div class="form-group">
                <label for="subtittle">Sub Judul Post</label>
                <input type="text" class="form-control" id="subtittle" name="subtittle" placeholder="Sub Judul">
              </div>
              <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
              </div>

              <div class="form-group">
              <label for="editor1">Isi Blog</label>

              <div class="box-body pad">

                      <textarea id="editor1" name="textBlog" rows="10" cols="80">
                      </textarea>
              </div>

              <div class="box-body pad">
                <input type="file" name="imageFiles" class="btn" >
              </div>
              <div class="checkbox">
                <br />
                  <input type="checkbox" id="status" name="status"> Publish
              </div>
            </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button class="btn btn-primary" type="submit" >Submit</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </section>
</div>
@endsection
<!-- ./wrapper -->
