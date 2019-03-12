<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link  rel="image_src" href="{{asset('/storage/images/app/logo.png')}}">
    <link rel="canonical" href="{{URL::current()}}">
    @if (isset($meta))
        <title> {{$meta->metatitle}} </title>
        <meta name="description" content="{{$meta->metadescription}}">
    @endif



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link defer rel="dns-prefetch" href="https://fonts.gstatic.com">

    {{-- fontawesome --}}
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> --}}
    <!-- Styles -->
    <link defer href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/animate.css') }}" rel="stylesheet"> --}}

    {{-- PRECONECTS --}}
    <link rel="preconnect" href="https://use.fontawesome.com">
    <link rel="preconnect" href="https://maps.google.com">
    <link rel="preconnect" href="https://www.google.com">

    
    

   


</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="width:100vw">
        <div id="app" class="container">
            <app-whatsapp></app-whatsapp>
            <div class="row">
                <app-navbar class="col-12"></app-navbar>
               

                <div class="col-12 w-100 row" style="margin-left:0.2%">
                    <main class="py-4 w-100 row">
                        <div class="col-12">
                            @yield('breadcrumb')
                        </div>
                        <div class="col-12">
                            @yield('content')
                        </div>

                    </main>
                    
                </div> 
    
            </div>
          
            <app-footer></app-footer>
        </div>
    </div>

    <script>
        @yield('structured-data')
    </script>
</body>
</html>
