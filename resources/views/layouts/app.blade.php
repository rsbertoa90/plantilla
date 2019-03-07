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

    {{-- Google search panel --}}
    <meta name="google-site-verification" content="NYmY4PL-kI89JjTkAUhCTkR8oWiGfabLWvgngOyFnf8" />

    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127092569-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127092569-1');
    </script>

    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '804920179714584');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=804920179714584&ev=PageView&noscript=1
        https://www.facebook.com/tr?id=804920179714584&ev=PageView&noscript=1
        "
        /></noscript>
        <!-- End Facebook Pixel Code -->


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
