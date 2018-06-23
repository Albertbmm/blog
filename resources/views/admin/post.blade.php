@extends('admin/layouts/app')

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
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Blog Post</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="form-group">
                <label for="tittle">Judul Post</label>
                <input type="text" class="form-control" id="tittle" placeholder="Judul Post">
              </div>
              <div class="form-group">
                <label for="subtittle">Sub Judul Post</label>
                <input type="text" class="form-control" id="subtittle" placeholder="Sub Judul">
              </div>
              <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" placeholder="Slug">
              </div>

              <div class="form-group">
              <label for="editor1">Isi Blog</label>

              <div class="box-body pad">
                <form>
                      <textarea id="editor1" name="editor1" rows="10" cols="80">

                      </textarea>
                </form>
              </div>

              <div class="checkbox">
                <br />
                  <input type="checkbox" id="status"> Publish
              </div>
            </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </section>

</div>
@endsection
<!-- ./wrapper -->
