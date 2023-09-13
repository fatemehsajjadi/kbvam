<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <base href="{{asset('web').'/'}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>سامانه درخواست وام</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/typo.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- Plugin'stylesheets  -->
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/nice-select.min.css">
    <link rel="stylesheet" href="css/slick.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- Vendor stylesheets  -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Custom stylesheet -->
    @yield('head')
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1017.0"
      data-gr-ext-installed="">

@include('layouts.web.menus')

<div class="site-wrapper overflow-hidden ">
    <script src="js/jquery-3.6.0.min.js"></script>
{{--    @include('layouts.web.login_reg_modal')--}}
    @yield('content')
    @include('layouts.web.footer')
</div>


<script src="js/bootstrap.min.js"></script>
<script>
    $('#havent_account').click(function () {
        $('#login').modal('hide');
        $('#signup').modal('show');
    });
    $('#have_account').click(function () {
        $('#signup').modal('hide');
        $('#login').modal('show');
    });
</script>


<!-- Vendor Scripts -->
{{--<script src="js/vendor.min.js"></script>--}}
<!-- Plugin's Scripts -->
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/aos.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery-ui.js"></script>
<!-- Activation Script -->
<!-- <script src="js/drag-n-drop.js"></script> -->
{{--<script src="js/custom.js"></script>--}}


</body>
</html>

