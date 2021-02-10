<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/compiled/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet">     <title>Login Page</title>
    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.ico" type="image/x-icon">
</head>
<body class="login-body">
<div class="login-page d-flex flex-column align-items-center mt-5">
    <div class="svg-icon">
        <svg viewBox="0 0 24 24" class="svg-icon r-k200y r-jwli3a r-4qtqp9 r-yyyyoo r-np7d94 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
    </div>
    <div class="h1-login m-3 text-white">
        <h1>
                <span>
                    Log in to Twitter
                </span>
        </h1>
    </div>
    <div class="login-form d-flex flex-column justify-content-center">


        <form method="POST" action="{{route('login')}}">
            @csrf
            <div>
                <input  class="form mw-100 h-25 block mt-1 w-full @error('email') border-danger @enderror"
                        placeholder="Phone, mail, or username" id="email"  type="email" name="email" value="{{old('email')}}">
                @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror

            </div>

            <div>
                <input  class="form mw-100 h-25 block mt-1 w-full @error('password') border-danger @enderror"
                        placeholder="Password" id="password"type="password" name="password" value="{{old('password')}}">
                @error('password')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="btn-form">
                <button type="submit" class="btn btn-lg btn-block">login</button>
            </div>
        </form>
    </div>
    <div class="form-footer mt-3">
        <div class="forget-password d-inline">
            <a href="#">Forgot password?</a>
        </div>
        <div class="sign-up d-inline">
            <a href="{{route('signup')}}" >Sign up for Twitter</a>
        </div>
    </div>
</div>
</body>
</html>
