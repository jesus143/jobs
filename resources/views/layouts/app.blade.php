<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Office Escape Solutions</title>

    <link rel="stylesheet" href="{{ asset('fonts/icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/star-rating.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}" >


    @yield('more_css')
</head>
 
<body>


<div class="loading">Loading&#8230;</div>

    <div id="app">

            @include('flash::message')

            @guest

                @yield('content')

            @else

                @jobseeker
                    @include('layouts.jobseeker.header')
                @endJobseeker

                @employer
                    @include('layouts.employer.header')
                @endEmployer

                @administrator
                    @include('layouts.administrator.header')
                @endAdministrator

                <!-- Main sidebar -->
                <div id="oes-dashboard" class="container padding-zero applicant-dashboard">

                    @jobseeker
                        @include('layouts.jobseeker.sidebar')
                    @endJobseeker

                     @employer
                            @include('layouts.employer.sidebar')
                     @endEmployer

                     @administrator
                        @include('layouts.administrator.sidebar')
                     @endAdministrator

                    @yield('content')
                </div>

                @yield('more_content')
            @endguest
    </div>

    <!-- jQuery Version 1.11.1 -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- sidebar custom file upload -->
    <script src="{{ asset('js/custom-file-input.js') }}"></script>
    <script src="{{ asset('js/2.5.16-vue.js') }}"></script>
    <script src="{{ asset('js/socket.io.js') }}"></script>
    <script src="{{ asset('js/0.18.0-axios.js') }}"></script>

    <script src="{{ asset('js/loading.js') }}"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

    <script>
        $('#flash-overlay-modal').modal();
    </script>

    @yield('more_js')



</body>
</html>
