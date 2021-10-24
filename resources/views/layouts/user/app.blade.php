
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--fiva icon-->
  <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon" />
  <!--fiva icon end-->
  <title>Hospital Management System</title>
  <link rel="stylesheet" href="{{ asset('user') }}/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ asset('user') }}/css/style.css" />
  <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
</head>

<body>
  <section class="wrapper">
    <section class="">
      <!--navbar section start-->
      @include('layouts.user.partial.header')
      <!--navbar section end-->

        @yield('user_content')

      <!--footer area start -->
      @include('layouts.user.partial.footer')
      <!--footer area end-->
    </section>
  </section>
  <!-- JS FILES -->
  <script src="{{ asset('user') }}/js/jquery.min.js"></script>
  <script src="{{ asset('user') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('user') }}/js/index.js"></script>
</body>

</html>
