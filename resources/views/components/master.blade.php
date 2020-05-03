<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome-free/css/all.min.css') }}">

    <!-- toastr -->
    <link rel="stylesheet" href="{{ asset('plugin/toastr/toastr.min.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       <nav class="px-8 py-6">
            <img src="{{ asset('img/logo.svg') }}" width="" alt="">
       </nav>

        <main class="py-2">
            {{ $slot }}
        </main>
    </div>
    <script src="{{ asset('plugin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/turbolinks.js') }}"></script>
    <!-- toastr -->
   <script src="{{ asset('plugin/toastr/toastr.min.js') }}"></script>

        @if (Session::has('success'))
            <script>
                toastr.success("{{ Session::get('success') }}");
            </script>
        @endif

        @if (Session::has('info'))
            <script>
                toastr.info("{{ Session::get('info') }}");
            </script>
        @endif

        <script>
            $(document).on('keyup','#tweet',function(){
                var rem = 255 - $(this).val().length;
                $('.count').text(rem);
                $('.count').removeClass('text-red-500');
                if(rem < 10){
                    $('.count').addClass('text-red-500');
                }
            });
            toastr.options = {
                "positionClass": "toast-bottom-right",
                "showDuration": "300",
                "hideDuration": "1000",
                }
        </script>
    <script src="{{ asset('js/style.js') }}"></script>
</body>
</html>
