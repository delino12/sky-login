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
                <a href="/register">Create Account</a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Test Laravel Dummy Login
                    <div class="thubnails">
                        <form method="post" action="/post-signin">
                             <input type="hidden" name="_token" value="{{ csrf_token() }} ">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="someone@example.com" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" name="password" placeholder="password" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
