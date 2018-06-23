@extends('admin/layouts/app')

@section('main_content')
<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tag</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="tag">Tag tittle</label>
              <input type="text" class="form-control" id="tag" placeholder="Tag tittle">
            </div>
            <div class="form-group">
              <label for="tagSlug">Tag slug</label>
              <input type="text" class="form-control" id="tagSlug" placeholder="Tag Slug">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="tagBtn">Submit</button>
          </div>
        </form>
      </div>

    </div>

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="tag">Categories tittle</label>
              <input type="text" class="form-control" id="cat" placeholder="Judul category">
            </div>
            <div class="form-group">
              <label for="tagSlug">Categories slug</label>
              <input type="text" class="form-control" id="catSlug" placeholder="Slug category">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary" name="categoryBtn">Submit</button>
          </div>
        </form>
      </div>

    </div>

  </div>

</section>
</div>

@endsection
