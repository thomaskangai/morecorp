<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Vendor styles -->
{{Html::style('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}
{{Html::style('vendors/bower_components/animate.css/animate.min.css')}}
{{Html::style('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css')}}
{{Html::style('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}
{{Html::style('vendors/bower_components/animate.css/animate.min.css')}}
{{Html::style('vendors/bower_components/flatpickr/dist/flatpickr.min.css')}}
{{Html::style('vendors/bower_components/sweetalert2/dist/sweetalert2.min.css')}}

{{Html::style('vendors/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}
<!-- App styles -->
    {{Html::style('css/app.min.css')}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <script type="text/javascript"> jQuery.noConflict() </script>
</head>

<body data-ma-theme="green">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
            <div class="navigation-trigger__inner">
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
            </div>
        </div>

        <div class="header__logo hidden-sm-down">
            <h1><a href="index.html">MoreCorp Dev Test</a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search for people, files, documents...">
                <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
            </div>
        </form>
        <a href="{{ url('/login') }}">Sign In</a>

       
    </header>


    

    <section class="content">
        <header class="content__title">
            <h1>@yield('title')</h1>
            <small>@yield('description')</small>

            <div class="actions">
                <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                <a href="" class="actions__item zmdi zmdi-check-all"></a>

                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="" class="dropdown-item">Refresh</a>
                        <a href="" class="dropdown-item">Manage Widgets</a>
                        <a href="" class="dropdown-item">Settings</a>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')




        <footer class="footer hidden-xs-down">
            <p>© MoreCorp Dev Test. All rights reserved.</p>
        </footer>
    </section>
</main>

<!-- Javascript -->
<!-- Vendors -->
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/tether/dist/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>

<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/moment/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/sweetalert2/dist/sweetalert2.min.js')}}"></script>


<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>


<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/flatpickr/dist/flatpickr.min.js')}}"></script>
<!--
          <script type="text/javascript" src="{{ URL::asset('vendors/bower_components/dropzone/dist/min/dropzone.min.js')}}"></script>

       <script type="text/javascript" src="{{ URL::asset('vendors/bower_components/nouislider/distribute/nouislider.min.js')}}"></script>

             <script type="text/javascript" src="{{ URL::asset('vendors/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('vendors/bower_components/trumbowyg/dist/trumbowyg.min.js')}}"></script>
 
        <script type="text/javascript" src="{{ URL::asset('js/app.min.js')}}"></script>-->

<!-- Charts and maps-->
<script type="text/javascript" src="{{ URL::asset('demo/js/flot-charts/curved-line.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('demo/js/flot-charts/line.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('demo/js/flot-charts/chart-tooltips.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('demo/js/other-charts.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('demo/js/jqvmap.js')}}"></script>



<!-- App functions and actions -->
<script type="text/javascript" src="{{ URL::asset('js/app.min.js')}}"></script>

<!-- Vendors: Data tables -->
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        $('.procedures').select2({
            width: '100%'
        });
    });
    $(document).ready(function(){
        $('.patients').select2({
            theme: "classic"
        });
    });
    $(document).ready(function(){
        $('.departments').select2({
            theme: "classic"
        });
    });
    $(document).ready(function(){
        $('.users').select2({
            theme: "classic"
        });
    });


</script>
<script>
    $('.alert-success').delay(5000).fadeOut(400)
</script>
</body>
</html>