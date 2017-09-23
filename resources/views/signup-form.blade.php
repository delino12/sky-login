<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="/">Home</a>
                <a href="/login">Login</a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Test Laravel Dummy Login
                    <div class="thumbnail">
                        <form method="post" action="/post-signup">
                            <input type="hidden" name="_token" value="{{ csrf_token() }} ">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="name" placeholder="Your Name" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Your Email" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                               
                                <div class="input-group">
                                    <input type="password" name="password" placeholder="Create Password" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Register</button>
                            </div>
                        </form>                        
                    </div>
                    
                    @if(Session::has('msg'))
                        <p style="font-size: 13px; color: #999;">{{ Session::get('msg') }}</p>
                        <p style="font-size: 13px; color: #999;">{{ Session::get('client') }}</p>
                        <span class="link"><a href="/login">Login Now</a></span>
                    @endif
                </div>
            </div>
        </div>
        <div class="content">
             <p>All right reserve &copy 2017 by Ekpoto </p>
        </div>
    </body>
</html>
