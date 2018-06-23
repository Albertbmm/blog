<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user/layouts/head')
  </head>

  <body>

    @include('user/layouts/header')

      @section('main_content')
        @show
    <hr>
    <!-- Footer -->
    <footer>
     @include('user/layouts/footer')
    </footer>
  </body>

</html>
