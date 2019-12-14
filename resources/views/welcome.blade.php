<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>
    <body>

        <!-- php artisan ui vue -->
        <div id="app">
       
            <tabs>
                <tab name="About us" >
                    About us content here
                </tab>
                <tab name="Contact us">
                    Contact us content here
                </tab>
                <tab name="Portfolio" selected="true">
                    Portfolio content here
                </tab>
                <tab name="Contact us another">
                    Contact us content here
                </tab>
            </tabs>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
