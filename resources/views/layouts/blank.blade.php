<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/images/cropped-fav-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('/images/cropped-fav-192x192.png') }}" sizes="192x192" />

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    {{-- <script src="https://use.fontawesome.com/9d0785000c.js"></script> --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('ckeditor4-vue/dist/ckeditor.js')}}"></script>

{{-- 
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/colors/blue.css') }}" id="theme" rel="stylesheet">
    
    <link href="{{ asset('/css/language-form.css') }}" rel="stylesheet"> --}}

    @yield('stylesheets')

    <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115772367-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115772367-1');
</script>

    <!-- Intro JS -->
    <link href="https://introjs.com/minified/introjs.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://introjs.com/minified/intro.min.js"></script>
    

</head>
<body class="fix-header card-no-border">


<!-- SAMPLE INTRO DEMO GUIDE -  DO NOT DELETE THIS

<h1 data-step="1" data-intro="This is a tooltip!" class="">Basic Usage</h1>
<a class="btn btn-large btn-success" href="javascript:void(0);" onclick="javascript:introJs().start();">Show me how</a> -->


    @include('_partials/mobile_device_blocker')
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== 
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>-->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        @foreach(project('errors') as $key => $class)
            @if(session()->get('flash_' . $key))
                <div class="alert alert-{{ $class }}">
                    <button type="button" class="pop-up-trigger" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    {!! session()->get('flash_' . $key) !!}
                </div>
            @endif
        @endforeach
        @yield('content')
    </section>
    <script>
function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
</script>
    <!-- Scripts -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    
    <script src="{{ mix('js/manifest.js') }}"></script>
	<script src="{{ mix('js/vendor.js') }}"></script>
	<script src="{{ mix('js/app.js') }}"></script>
    @yield('scripts')

   {{--  <!-- <script src="{{ asset('js/app.js') }}"></script> -->

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/tether.min.js') }}"></script>gi
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <!-- <script src="{{ asset('plugins/dropify/dist/js/dropify.min.js') }}"></script> -->gigigi

    <!-- <script src="{{ asset('js/custom_front.js') }}"></script> -->

    <!--Custom JavaScript -->
    <script src="{{ asset('js/validation.js') }}"></script>


    <script src="{{ asset('plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>

    <script src="{{ asset('js/custom_front.js') }}"></script>

     <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <!--new script js added-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


    <!--end of new script js-->




    <!-- end - This is for export functionality only -->
    <script>
   $('#project-list').DataTable({
        dom: 'Bfrtip',
        buttons: []
    });
    $('#example23').DataTable({
        /*"ajax": "data/objects.txt",
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]*/
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

    <script>

    $('#example24').DataTable({
        /*"ajax": "data/objects.txt",
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]*/
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>

    <script>

    $('#example25').DataTable({
        /*"ajax": "data/objects.txt",
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]*/
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script> --}}

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->




</body>
</html>
