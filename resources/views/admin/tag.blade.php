@extends('admin/layouts/app')
<!--------

UNTUK MEMBUAT TAG DAN CATEGORY
-->

@section('main_content')
<script>
 $(document).ready(function(){
    $('#tagBtn').click(function(){
      $('#running').addClass('running');
      var tag_name = $('#tag').val();
      var tag_slug = $('#tagSlug').val();
      var token = $('#token').val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "post",
        data: "tag_name=" + tag_name + "&tag_slug=" + tag_slug + "&token=" + token,
        url: "<?php echo url('admin/tag/create/ajax')?>",
        success: function(data){
          $('#running').removeClass('running');
          console.log(data);
          $('#tag').val("")
          $('#tagSlug').val("")
        }
      });
      });
    });
</script>
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

          <div class="box-body">
            {{csrf_field()}}
            <div class="form-group">
              <label for="tag">Tag tittle</label>
              <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag tittle">
            </div>
            <div class="form-group">
              <label for="tagSlug">Tag slug</label>
              <input type="text" class="form-control" id="tagSlug" name="tagSlug" placeholder="Tag Slug">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer ld-ext-right" id="running">
            <button type="submit" class="btn btn-primary " id="tagBtn" name="tagBtn">Submit</button>
            <div class="ld ld-ring ld-spin"></div>
          </div>

      </div>

    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

            <script>
             $(document).ready(function(){
                $('#catBtn').click(function(){
                $('#runningCat').addClass('running');
                  var tag_name = $('#cat').val();
                  var tag_slug = $('#catSlug').val();
                  var token = $('#catToken').val();
                  $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    data: "cat_name=" + tag_name + "&cat_slug=" + tag_slug + "&token=" + token,
                    url: "<?php echo url('admin/category/create/ajax')?>",
                    success: function(data){
                     $('#runningCat').removeClass('running');
                      console.log(data);
                      $('#cat').val("")
                      $('#catSlug').val("")
                    }
                  });
                  });
                });
            </script>
        <input type="hidden" name="catToken" value="{{csrf_token()}}"/>
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

          <div class="box-footer ld-ext-right" id="runningCat">
            <button type="submit" class="btn btn-primary" id="catBtn" name="categoryBtn">Submit</button>
            <div class="ld ld-ring ld-spin"></div>
          </div>

      </div>

    </div>

  </div>

</section>
</div>
@endsection
