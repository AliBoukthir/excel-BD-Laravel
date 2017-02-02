<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
       

       @foreach ($data as $user)
		    <p>This is user {{ $user->id }}</p>
		@endforeach
    </body>
</html>