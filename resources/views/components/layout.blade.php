<html>
    <head>
        <title>{{ $title ?? 'Zenbot sim runner' }}</title>
        <link rel="stylesheet" href="/css/app.css">
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <h1>
            <a href="/">Zenbot sim runner</a>
        </h1>
        <hr />        
        {{ $slot }}
        <hr />
        <a href="/">Home</a>
        <br />
        <a href="/strategies">List strategies</a>  
        <br />
        <a href="/exchanges">List exchanges</a>  
        <br />
        <a href="/strategy-options">List strategy options</a>        
    </body>
</html>