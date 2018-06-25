@extends('admin/layouts/app')
@section('main_content')
<script>
 $(document).ready(function(){
    $('#catBtn').click(function(){
      $('#running').addClass('running');
      var tag_name = $('#cat').val();
      var tag_slug = $('#catSlug').val();
      var tag_id = $('#catId').val();
      var token = $('#_token').val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "PUT",
        data: "tag_name=" + tag_name + "&tag_slug=" + tag_slug + "&token=" + token,
        url: "{{url('admin/category')}}"+"/"+tag_id,
        success: function(data){
          console.log(data);
          //redirect ke url awal
            $('#running').removeClass('running');
           window.setTimeout(function(){ window.location = "{{route('category.index')}}"; },500);
        }
      });
      });
    });
</script>
<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tag</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->

          <div class="box-body">
              <div class="col-lg-offset-3 col-md-6">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" value="{{$categoryEdit->id}}" id="catId"/>
            <div class="form-group">
              <label for="tag">Category tittle</label>
              <input type="text" class="form-control" id="cat" name="tag"  value="{{$categoryEdit->name}}">
            </div>
            <div class="form-group">
              <label for="tagSlug">Category slug</label>
              <input type="text" class="form-control" id="catSlug" name="tagSlug" value="{{$categoryEdit->slug}}">
            </div>
            <div class="box-footer ld-ext-right" id="running">
              <button type="submit" class="btn btn-primary " id="catBtn" name="tagBtn">Submit</button>
              <div class="ld ld-ring ld-spin"></div>
            </div>
                </div>
          </div>
          <!-- /.box-body -->

      </div>

    </div>
  </div>

</section>
</div>
@endsection
