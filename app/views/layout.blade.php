<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Demo</title>
</head>
<body>
    <div id="container">
        <div id="nav">
            <ul>
                <li>{{ HTML::linkRoute('users', 'Users') }}</li>
                
            </ul>
        </div><!-- end nav -->

        @yield('content')
    </div><!-- end container -->
</body>
</html>