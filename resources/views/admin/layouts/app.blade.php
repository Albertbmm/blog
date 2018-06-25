<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  @include('admin/layouts/head')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
      @include('admin/layouts/header')
      @include('admin/layouts/sidebar')

      @section('main_content')
        @show


    </div>
    @include('admin/layouts/footer')
  </body>


  <!-- jQuery 2.2.3 -->
  <script src="{{asset('admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('admin/plugins/fastclick/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('admin/dist/js/app.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('admin/dist/js/demo.js')}}"></script>
  <!-- CK Editor -->
  @section('footerSection')
     @show
  <!-- Include the Quill library -->
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <!-- include summernote css/js -->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <script>
  $(document).ready(function() {
    $('#editor1').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true
    });
  });
</script>

</html>
