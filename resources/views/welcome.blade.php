<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Sanctum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <body>
            @if (Auth::check())
                <script>
                   window.Laravel = {!!json_encode([
                       'isLoggedin' => true,
                       'user' => Auth::user()
                   ])!!}
                </script>
            @else
                <script>
                    window.Laravel = {!!json_encode([
                        'isLoggedin' => false
                    ])!!}
                </script>
            @endif
            <div id="app"></div>
            <script src="{{ mix('js/app.js') }}"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
