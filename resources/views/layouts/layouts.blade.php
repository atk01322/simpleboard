<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        
    </head>
    <body>
        @component('components.header')
         @endcomponent
         <div class="container pb-5" style="padding-top: 5rem;">
            @yield('content')
         </div>

         @component('components.footer')
         @endcomponent

         <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html> 
