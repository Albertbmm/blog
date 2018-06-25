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
      var tag_id = $('#tagId').val();
      var token = $('#_token').val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "PUT",
        data: "tag_name=" + tag_name + "&tag_slug=" + tag_slug + "&token=" + token,
        url: "{{url('admin/tag')}}"+"/"+tag_id,
        success: function(data){
          console.log(data);
          //redirect ke url awal
            $('#running').removeClass('running');
          window.setTimeout(function(){ window.location = "{{route('tag.index')}}"; },500);
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
            <input type="hidden" value="{{$tagEdit->id}}" id="tagId"/>
            <div class="form-group">
              <label for="tag">Tag tittle</label>
              <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag tittle" value="{{$tagEdit->name}}">
            </div>
            <div class="form-group">
              <label for="tagSlug">Tag slug</label>
              <input type="text" class="form-control" id="tagSlug" name="tagSlug" placeholder="Tag Slug" value="{{$tagEdit->slug}}">
            </div>
            <div class="box-footer ld-ext-right" id="running">
              <button type="submit" class="btn btn-primary " id="tagBtn" name="tagBtn">Submit</button>
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
