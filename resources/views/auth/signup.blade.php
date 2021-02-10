<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/compiled/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,400;0,700;1,500&display=swap"
          rel="stylesheet">
    <title>Main Page</title>
    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.ico" type="image/x-icon">
    <script>
        function ModifyPlaceHolder() {
            var changePlaceholder = document.getElementById("Place-holder");
            var Placeholder = changePlaceholder.placeholder;
            var changeBtnHtml = document.getElementById("btn");
            var btn = changeBtnHtml.innerHTML;
            var result = Placeholder.localeCompare('Phone');
            if (!result) {
                changePlaceholder.placeholder = "Email";
                changeBtnHtml.innerHTML = "Use Phone instead";
            } else {
                changePlaceholder.placeholder = "Phone";
                changeBtnHtml.innerHTML = "Use email instead"
            }
        }
    </script>
</head>
<body>
<section class="container-fluid">
    <div class="row page">
        {{--            Left-section--}}
        <div class="col-lg-6 left-section d-flex justify-content-center text-center align-items-center">
{{--            <div class="bird-bg h-50">--}}
{{--                <svg viewBox="0 0 24 24"--}}
{{--                     class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1n7nint r-10m99ii r-u8s1d r-1n2wx2z r-1plcrui r-1l2rav9 r-lrvibr">--}}
{{--                    <g>--}}
{{--                        <path--}}
{{--                            d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--            </div>--}}
            <div class=" ">
                <div class="information d-flex flex-column">
                    <div class="about d-flex flex-row justify-content-start m-4">
                        <div>
                            <svg viewBox="0 0 24 24"
                                 class="svg-icon r-jwli3a r-4qtqp9 r-yyyyoo r-1q142lx r-1blvdjr r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                                <g>
                                    <path
                                        d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                                </g>
                            </svg>
                        </div>
                        <div>
                            <span class="about-text ml-4">Follow your interests.</span>
                        </div>
                    </div>
                    <div class="about d-flex flex-row justify-content-start m-4">
                        <div>
                            <svg viewBox="0 0 24 24"
                                 class="svg-icon r-jwli3a r-4qtqp9 r-yyyyoo r-1q142lx r-1blvdjr r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                                <g>
                                    <path
                                        d="M16.695 13.037c1.185 0 2.51-.132 3.368-1.11.72-.823.952-2.08.715-3.847-.333-2.478-1.86-3.956-4.083-3.956-2.225 0-3.75 1.48-4.084 3.956-.236 1.766-.002 3.023.717 3.846.858.98 2.184 1.11 3.368 1.11zM14.098 8.28c.134-.992.648-2.656 2.598-2.656 1.948 0 2.463 1.664 2.597 2.655.174 1.293.054 2.187-.358 2.657-.367.42-1.036.6-2.238.6s-1.87-.18-2.24-.6c-.412-.47-.533-1.364-.36-2.658zm9.788 11.222c-.763-3.066-3.72-5.208-7.19-5.208-1.765 0-3.392.558-4.67 1.505-1.278-.948-2.905-1.506-4.67-1.506-3.47 0-6.428 2.142-7.19 5.208-.156.625-.025 1.265.356 1.754.37.473.94.744 1.567.744h19.87c.628 0 1.2-.27 1.57-.745.382-.49.512-1.13.356-1.753zm-1.537.83c-.09.11-.22.168-.39.168h-7.413c.078-.32.084-.66 0-.998-.25-1-.75-1.888-1.41-2.65.993-.665 2.223-1.058 3.558-1.058 2.78 0 5.14 1.674 5.735 4.07.044.174.014.344-.08.467zM7.354 20.5H2.09c-.17 0-.3-.057-.388-.168-.096-.123-.126-.294-.083-.47.596-2.395 2.954-4.068 5.735-4.068 2.78 0 5.14 1.674 5.735 4.07.043.174.014.344-.082.467-.088.113-.22.17-.388.17H7.355zm.001-7.463c1.185 0 2.51-.132 3.367-1.11.72-.823.953-2.08.716-3.847-.333-2.478-1.86-3.956-4.083-3.956-2.225 0-3.75 1.48-4.084 3.956-.236 1.766-.002 3.023.717 3.846.858.98 2.184 1.11 3.368 1.11zM4.758 8.28c.134-.992.648-2.656 2.598-2.656 1.948 0 2.463 1.664 2.597 2.655.174 1.293.053 2.187-.358 2.658-.368.42-1.037.6-2.238.6-1.202 0-1.87-.18-2.24-.6-.412-.47-.533-1.365-.36-2.66z"></path>
                                </g>
                            </svg>
                        </div>
                        <div>
                            <span class="about-text ml-4">Hear what people are talking about.</span>
                        </div>
                    </div>
                    <div class="about d-flex flex-row justify-content-start m-4">
                        <div>
                            <svg viewBox="0 0 24 24"
                                 class="svg-icon r-jwli3a r-4qtqp9 r-yyyyoo r-1q142lx r-1blvdjr r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                                <g>
                                    <path
                                        d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z"></path>
                                </g>
                            </svg>
                        </div>
                        <div>
                            <span class="about-text ml-4">Join the conversation.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--            end of Left-section--}}
        {{--            right-section--}}
        <div class="right-section d-flex justify-content-center m-auto align-items-center h-100 w-50">
            <div class="">
                <div class="container-edit d-flex flex-column w-75  justify-content-center m-auto">
                    <div class="svg-icon">
                        <svg viewBox="0 0 24 24"
                             class="svg-icon-home r-k200y r-jwli3a r-4qtqp9 r-yyyyoo r-np7d94 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                            <g>
                                <path
                                    d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="h3-right-section mt-5 text-white">
                        <h3>See what’s happening in the world right now</h3>
                    </div>
                    <div class="p-right-section mt-5 text-white">
                        <p>Join Twitter today.</p>
                    </div>
                    <div class="right-section-buttons">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="signupBtn"
                                data-toggle="modal" data-target="#exampleModalCenter">Signup
                        </button>
                        <button type="button" class="custom-btn btn btn-secondary btn-lg btn-block"
                                onclick="document.location='login'">Login
                        </button>
                        <!-- Modal -->

                        <div class="modal fade " id="exampleModalCenter"
                             data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                             tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered w-100" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="signup-body p-3">
                                            <div class="row">
                                                <div
                                                    class="centered-signup d-flex justify-content-center flex-column ">
                                                    <div class="signup-content">
                                                        <form method="POST" action="{{route('register')}}">
                                                            @csrf
                                                            <div class="head-content d-flex flex-row">
                                                                <div
                                                                    class="svg-icon d-flex  justify-content-center m-auto">
                                                                    <svg viewBox="0 0 24 24"
                                                                         class="svg-icon ml-5 r-k200y r-jwli3a r-4qtqp9 r-yyyyoo r-np7d94 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                                                                        <g>
                                                                            <path
                                                                                d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <button type="submit"
                                                                            class="btn btn-primary rounded-pill align-items-end">
                                                                        signup
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="h1-signup mt-3">
                                                                <h1>
                                                                    <span id="myP">
                                                                        Create your account
                                                                    </span>
                                                                </h1>
                                                            </div>
                                                            <div class="signup-form">
                                                                <div class="userInfo d-flex flex-column mb-2 rounded border">
                                                                    <div class="label ml-2">Name</div>
                                                                    <div class="inputName">
                                                                        <input class="input p-2 w-75  mt-1" id="name"
                                                                               type="text"
                                                                               name="name" :value="old('name')"
                                                                               required autofocus autocomplete="name">
                                                                    </div>
                                                                </div>
                                                                <div class="userInfo d-flex flex-column mb-2 rounded border">
                                                                    <div class="label ml-2">Email</div>
                                                                    <div class="inputName">
                                                                        <input class="input p-2 w-75 block mt-1" id="email" type="email" name="email"
                                                                               :value="old('email')"
                                                                               required>
                                                                    </div>
                                                                </div>

                                                                <div class="userInfo d-flex flex-column mb-2 rounded border">
                                                                    <div class="label ml-2">password</div>
                                                                    <div class="inputName">
                                                                        <input class="input p-2 w-75 block mt-1" id="password"
                                                                               type="password"
                                                                               name="password" required autocomplete="new-password"
                                                                        >
                                                                    </div>
                                                                </div>

                                                                <div class="userInfo d-flex flex-column mb-2 rounded border">
                                                                    <div class="label ml-2">confirm password</div>
                                                                    <div class="inputName">
                                                                        <input class="input p-2 w-75" id="password_confirmation"  type="password"
                                                                               name="password_confirmation"
                                                                               required autocomplete="new-password">
                                                                    </div>
                                                                </div>

                                                                <div class="use-email-phone text-left mt-n2 mb-2 ">
                                                                    <button type="button" class="cus-btn" id="btn"
                                                                            onclick="ModifyPlaceHolder()">Use email
                                                                        instead
                                                                    </button>
                                                                </div>

                                                                <div class="span-text-1 mt-3 ">
                                                                    <span
                                                                        class="d-block">Date of birth</span>
                                                                    <span class="text-secondary font-weight-lighter date-detail">This will not be shown publicly. Confirm your own age, even if this account is for a business, a pet, or something else.</span>
                                                                </div>
                                                                <div
                                                                    class="date-of-birth mt-3 d-flex justify-content-between flex-row">

                                                                    <div class="birthday birth d-inline input w-100 border">
                                                                        <div class="label ml-2">Day</div>
                                                                        <div>
                                                                            <select id="day"
                                                                                    class="select-input border-0 w-100"
                                                                                    name="day">
                                                                                <option></option>
                                                                                @for($i=1;$i<=31;$i++)
                                                                                <option value="{{$i}}">{{$i}}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="birthmonth birth d-inline w-100 border">
                                                                        <div class="label ml-2">Month</div>
                                                                        <div class="input">
                                                                            <select id="month"
                                                                                    class="select-input border-0 w-100"
                                                                                    name="month">
                                                                                <option selected></option>
                                                                                <option value="January">January</option>
                                                                                <option value="February">February</option>
                                                                                <option value="March">March</option>
                                                                                <option value="April">April</option>
                                                                                <option value="May">May</option>
                                                                                <option value="June">June</option>
                                                                                <option value="July">July</option>
                                                                                <option value="August">August</option>
                                                                                <option value="September">September</option>
                                                                                <option value="October">October</option>
                                                                                <option value="November">November</option>
                                                                                <option value="December">December</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    {{--                                                            End of month selector--}}
                                                                    <div class="birth birthyear d-inline w-100 border">
                                                                        <div class="label ml-2">Year</div>
                                                                        <div class="input">
                                                                            <select id="year"
                                                                                    class="select-input border-0 w-100"
                                                                                    name="year">
                                                                                <option selected> </option>
                                                                                @for( $x=1960;$x<2021;$x++)
                                                                                <option value="{{$x}}">{{$x}}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--            end of right-section--}}
        </div>
    </div>
</section>

</body>
</html>
