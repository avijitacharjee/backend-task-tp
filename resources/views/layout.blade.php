<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Shop</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('/admin-assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin-assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin-assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/admin-assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin-assets/css/style.css') }}" rel="stylesheet">

    {{-- Datatables --}}
    <link rel="stylesheet" href="{{asset('admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    {{-- End datatables --}}
</head>

<body>

    @include('sidebar')

    @include('header')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    <script src="{{ asset('/admin-assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('/admin-assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('/admin-assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('/admin-assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('/admin-assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('/admin-assets/js/dashboard2.js') }}"></script>

    {{-- datatable --}}

    <script src="{{asset('admin-assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin-assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

</body>

</html>
