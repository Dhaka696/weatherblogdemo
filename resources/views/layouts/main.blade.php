<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Weather Works</title>
         <!-- Styles -->
        <link href="{{url('css/app.css')}}" rel="stylesheet"> 
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    </head>
    <body> 
        <main>
            <div id="app">
                <v-app style="background-color:#FFF !important">
                    <v-content>
                            <mainnavbar> </mainnavbar>
                            @yield('content')
                            <mainfooter> </mainfooter>                   
                    </v-content>
                </v-app>
            </div>
        </main>
         
       
        <script src="{{ mix('js/app.js') }}"></script>
        <script>
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
    </body>
</html>
