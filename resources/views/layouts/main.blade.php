<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Streamlab - Video Streaming HTML5 Template</title>
        @include('layouts.header')
    </head>

    <body>

        <!--=========== Loader =============-->
        <div id="gen-loading">
            <div id="gen-loading-center">
                <img src="images/logo-1.png" alt="loading">
            </div>
        </div>
        <!--=========== Loader =============-->

        @include('layouts.menu')
        @yield('content')
        @include('layouts.footer')


    </body>

</html>
