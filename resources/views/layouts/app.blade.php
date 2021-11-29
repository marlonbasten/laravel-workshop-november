<html>
    <head>
        <title>Blog</title>
    </head>
    <body>

        <ul>
            <li><a href="{{ route('test') }}">Home</a></li>
            <li><a href="{{ route('post.list') }}">Posts</a></li>
            <li>Benutzer</li>
        </ul>

        @yield('content')

    </body>
</html>
