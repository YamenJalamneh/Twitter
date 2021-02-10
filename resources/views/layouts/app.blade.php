<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')

    <link rel="stylesheet" href="/compiled/app.css">
    <script src="resources/js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <livewire:styles />
    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.ico" type="image/x-icon">
@yield('head')

    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.ico" type="image/x-icon"> @yield('title')

</head>
<body>
<div class="container">

    <nav class="navbar navbar-fixed fixed-bottom  navbar-expand-lg border-top d-none  d-md-block  d-block
    d-sm-block  d-md-none d-sm-none d-lg-none">
        <div class="container-fluid ">
            <div class="w-100 " id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex flex-row justify-content-between ">

                        <div class="p-2 icon-hover">
                            <a class="icon home nav-link active" href="/home">
                                <svg viewBox="0 0 24 24" class="svg-home r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.46 7.57L12.357 2.115c-.223-.12-.49-.12-.713 0L1.543 7.57c-.364.197-.5.652-.303 1.017.135.25.394.393.66.393.12 0 .243-.03.356-.09l.815-.44L4.7 19.963c.214 1.215 1.308 2.062 2.658 2.062h9.282c1.352 0 2.445-.848 2.663-2.087l1.626-11.49.818.442c.364.193.82.06 1.017-.304.196-.363.06-.818-.304-1.016zm-4.638 12.133c-.107.606-.703.822-1.18.822H7.36c-.48 0-1.075-.216-1.178-.798L4.48 7.69 12 3.628l7.522 4.06-1.7 12.015z"></path><path d="M8.22 12.184c0 2.084 1.695 3.78 3.78 3.78s3.78-1.696 3.78-3.78-1.695-3.78-3.78-3.78-3.78 1.696-3.78 3.78zm6.06 0c0 1.258-1.022 2.28-2.28 2.28s-2.28-1.022-2.28-2.28 1.022-2.28 2.28-2.28 2.28 1.022 2.28 2.28z"></path></g></svg>
                            </a>
                        </div>
                        <div class="p-2 icon-hover">
                            <a class="icon home nav-link " href="{{route('home')}}">
                                <svg viewBox="0 0 24 24" class="svg-home r-111h2gw r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                            </a>
                        </div>
                        <div class="p-2 icon-hover">
                            <a class="nav-link icon Notifications mt-1 d-flex flex-row mb-2"
                               href="{{route('notify')}}">
                                <svg viewBox="0 0 24 24"
                                     class="svg-home r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                                    <g>
                                        <path
                                            d="M21.697 16.468c-.02-.016-2.14-1.64-2.103-6.03.02-2.532-.812-4.782-2.347-6.335C15.872 2.71 14.01 1.94 12.005 1.93h-.013c-2.004.01-3.866.78-5.242 2.174-1.534 1.553-2.368 3.802-2.346 6.334.037 4.33-2.02 5.967-2.102 6.03-.26.193-.366.53-.265.838.102.308.39.515.712.515h4.92c.102 2.31 1.997 4.16 4.33 4.16s4.226-1.85 4.327-4.16h4.922c.322 0 .61-.206.71-.514.103-.307-.003-.645-.263-.838zM12 20.478c-1.505 0-2.73-1.177-2.828-2.658h5.656c-.1 1.48-1.323 2.66-2.828 2.66zM4.38 16.32c.74-1.132 1.548-3.028 1.524-5.896-.018-2.16.644-3.982 1.913-5.267C8.91 4.05 10.397 3.437 12 3.43c1.603.008 3.087.62 4.18 1.728 1.27 1.285 1.933 3.106 1.915 5.267-.024 2.868.785 4.765 1.525 5.896H4.38z">
                                        </path>
                                    </g>
                                    <span class="badge badge-danger rounded-circle ml-n2 mb-5 position-absolute">
                                          {{\App\Models\Notification::where('tweet_id',auth()->user()->id)
                                            ->where('user_id','!=',auth()->user()->id)->get()->count()}}
                                    </span>
                                </svg>
                            </a>
                        </div>
                        <div class="p-2 icon-hover">
                            <a class="nav-link icon  Messages mt-1 d-flex flex-row mb-2" href="#">
                                <svg viewBox="0 0 24 24" class="svg-home r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M19.25 3.018H4.75C3.233 3.018 2 4.252 2 5.77v12.495c0 1.518 1.233 2.753 2.75 2.753h14.5c1.517 0 2.75-1.235 2.75-2.753V5.77c0-1.518-1.233-2.752-2.75-2.752zm-14.5 1.5h14.5c.69 0 1.25.56 1.25 1.25v.714l-8.05 5.367c-.273.18-.626.182-.9-.002L3.5 6.482v-.714c0-.69.56-1.25 1.25-1.25zm14.5 14.998H4.75c-.69 0-1.25-.56-1.25-1.25V8.24l7.24 4.83c.383.256.822.384 1.26.384.44 0 .877-.128 1.26-.383l7.24-4.83v10.022c0 .69-.56 1.25-1.25 1.25z"></path></g></svg>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="row layout justify-content-md-center ">
        <div class="left-bar border-right mw-25 pr-5 d-none d-lg-block">
            <div class="logo mt-3">
                <svg  fill="#00acee" viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
            </div>
            <div class="list mt-3">
                <a class="icon home mt-1 d-flex flex-row mb-2" href="/home">
                    <svg viewBox="0 0 24 24"  style="@if(\Illuminate\Support\Facades\Route::currentRouteName()=='home' )
                        fill: rgb(29, 161, 242); @endif"

                         class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.46 7.57L12.357 2.115c-.223-.12-.49-.12-.713 0L1.543 7.57c-.364.197-.5.652-.303 1.017.135.25.394.393.66.393.12 0 .243-.03.356-.09l.815-.44L4.7 19.963c.214 1.215 1.308 2.062 2.658 2.062h9.282c1.352 0 2.445-.848 2.663-2.087l1.626-11.49.818.442c.364.193.82.06 1.017-.304.196-.363.06-.818-.304-1.016zm-4.638 12.133c-.107.606-.703.822-1.18.822H7.36c-.48 0-1.075-.216-1.178-.798L4.48 7.69 12 3.628l7.522 4.06-1.7 12.015z"></path><path d="M8.22 12.184c0 2.084 1.695 3.78 3.78 3.78s3.78-1.696 3.78-3.78-1.695-3.78-3.78-3.78-3.78 1.696-3.78 3.78zm6.06 0c0 1.258-1.022 2.28-2.28 2.28s-2.28-1.022-2.28-2.28 1.022-2.28 2.28-2.28 2.28 1.022 2.28 2.28z"></path></g></svg>
                    <div  class="name ml-4 mr-3 " style="@if(\Illuminate\Support\Facades\Route::currentRouteName()=='home' )
                        color: rgb(29, 161, 242); @endif"> Home </div>
                </a>
                <a class="icon Explore mt-1 d-flex flex-row mb-2" href="#">
                    <svg viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M20.585 9.468c.66 0 1.2-.538 1.2-1.2 0-.662-.54-1.2-1.2-1.2h-3.22l.31-3.547c.027-.318-.07-.63-.277-.875-.206-.245-.495-.396-.822-.425-.65-.035-1.235.432-1.293 1.093l-.326 3.754H9.9l.308-3.545c.06-.658-.43-1.242-1.097-1.302-.665-.05-1.235.43-1.293 1.092l-.325 3.754h-3.33c-.663 0-1.2.538-1.2 1.2 0 .662.538 1.2 1.2 1.2h3.122l-.44 5.064H3.416c-.662 0-1.2.54-1.2 1.2s.538 1.202 1.2 1.202h3.22l-.31 3.548c-.057.657.432 1.24 1.09 1.3l.106.005c.626 0 1.14-.472 1.195-1.098l.327-3.753H14.1l-.308 3.544c-.06.658.43 1.242 1.09 1.302l.106.005c.617 0 1.142-.482 1.195-1.098l.325-3.753h3.33c.66 0 1.2-.54 1.2-1.2s-.54-1.202-1.2-1.202h-3.122l.44-5.064h3.43zm-5.838 0l-.44 5.063H9.253l.44-5.062h5.055z"></path></g></svg>
                    <div  class="name ml-4 mr-3"> Explore </div>
                </a>
                <a class="icon Notifications mt-1 d-flex flex-row mb-2"  href="{{route('notify')}}">
                    <svg viewBox="0 0 24 24" style="@if(\Illuminate\Support\Facades\Route::currentRouteName()=='notify' )
                        fill: rgb(29, 161, 242); @endif"
                         class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                        <g>
                            <path
                                d="M21.697 16.468c-.02-.016-2.14-1.64-2.103-6.03.02-2.532-.812-4.782-2.347-6.335C15.872 2.71 14.01 1.94 12.005 1.93h-.013c-2.004.01-3.866.78-5.242 2.174-1.534 1.553-2.368 3.802-2.346 6.334.037 4.33-2.02 5.967-2.102 6.03-.26.193-.366.53-.265.838.102.308.39.515.712.515h4.92c.102 2.31 1.997 4.16 4.33 4.16s4.226-1.85 4.327-4.16h4.922c.322 0 .61-.206.71-.514.103-.307-.003-.645-.263-.838zM12 20.478c-1.505 0-2.73-1.177-2.828-2.658h5.656c-.1 1.48-1.323 2.66-2.828 2.66zM4.38 16.32c.74-1.132 1.548-3.028 1.524-5.896-.018-2.16.644-3.982 1.913-5.267C8.91 4.05 10.397 3.437 12 3.43c1.603.008 3.087.62 4.18 1.728 1.27 1.285 1.933 3.106 1.915 5.267-.024 2.868.785 4.765 1.525 5.896H4.38z">
                            </path>
                        </g>
                            @if(\App\Models\Notification::where('tweet_id',auth()->user()->id)
                                  ->where('user_id','!=',auth()->user()->id)->get()->count())
                            <span class="badge badge-danger rounded-circle ml-n2 mb-5 position-absolute">
                               {{\App\Models\Notification::where('tweet_id',auth()->user()->id)
                                  ->where('user_id','!=',auth()->user()->id)->get()->count()}}
                            </span>
                            @endif

                    </svg>
                    <div  class=" name ml-4 mr-3" style="@if(\Illuminate\Support\Facades\Route::currentRouteName()=='notify' )
                        color: rgb(29, 161, 242); @endif"> Notifications </div>
                </a>
                <a class="icon Messages mt-1 d-flex flex-row mb-2" href="#">
                    <svg viewBox="0 0 24 24" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M19.25 3.018H4.75C3.233 3.018 2 4.252 2 5.77v12.495c0 1.518 1.233 2.753 2.75 2.753h14.5c1.517 0 2.75-1.235 2.75-2.753V5.77c0-1.518-1.233-2.752-2.75-2.752zm-14.5 1.5h14.5c.69 0 1.25.56 1.25 1.25v.714l-8.05 5.367c-.273.18-.626.182-.9-.002L3.5 6.482v-.714c0-.69.56-1.25 1.25-1.25zm14.5 14.998H4.75c-.69 0-1.25-.56-1.25-1.25V8.24l7.24 4.83c.383.256.822.384 1.26.384.44 0 .877-.128 1.26-.383l7.24-4.83v10.022c0 .69-.56 1.25-1.25 1.25z"></path></g></svg>
                    <div  class="name ml-4 mr-3"> Messages </div>
                </a>
                <a class="icon Bookmarks mt-1 d-flex flex-row mb-2" href="#">
                    <svg viewBox="0 0 24 24" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M19.9 23.5c-.157 0-.312-.05-.442-.144L12 17.928l-7.458 5.43c-.228.164-.53.19-.782.06-.25-.127-.41-.385-.41-.667V5.6c0-1.24 1.01-2.25 2.25-2.25h12.798c1.24 0 2.25 1.01 2.25 2.25v17.15c0 .282-.158.54-.41.668-.106.055-.223.082-.34.082zM12 16.25c.155 0 .31.048.44.144l6.71 4.883V5.6c0-.412-.337-.75-.75-.75H5.6c-.413 0-.75.338-.75.75v15.677l6.71-4.883c.13-.096.285-.144.44-.144z"></path></g></svg>
                    <div  class="name ml-4 mr-3"> Bookmarks </div>
                </a>
                <a class="icon Lists mt-1 d-flex flex-row mb-2" href="#">
                    <svg viewBox="0 0 24 24" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M19.75 22H4.25C3.01 22 2 20.99 2 19.75V4.25C2 3.01 3.01 2 4.25 2h15.5C20.99 2 22 3.01 22 4.25v15.5c0 1.24-1.01 2.25-2.25 2.25zM4.25 3.5c-.414 0-.75.337-.75.75v15.5c0 .413.336.75.75.75h15.5c.414 0 .75-.337.75-.75V4.25c0-.413-.336-.75-.75-.75H4.25z"></path><path d="M17 8.64H7c-.414 0-.75-.337-.75-.75s.336-.75.75-.75h10c.414 0 .75.335.75.75s-.336.75-.75.75zm0 4.11H7c-.414 0-.75-.336-.75-.75s.336-.75.75-.75h10c.414 0 .75.336.75.75s-.336.75-.75.75zm-5 4.11H7c-.414 0-.75-.335-.75-.75s.336-.75.75-.75h5c.414 0 .75.337.75.75s-.336.75-.75.75z"></path></g></svg>
                    <div  class="ml-4 mr-3"> Lists </div>
                </a>
                <a class="icon Profile mt-1 d-flex flex-row mb-2" href="{{route('profile',auth()->user()->id)}}">

                    <svg viewBox="0 0 24 24" style="@if(\Illuminate\Support\Facades\Route::currentRouteName()=='profile' )
                        fill: rgb(29, 161, 242); @endif"
                         class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr">
                        <g><path d="M12 11.816c1.355 0 2.872-.15 3.84-1.256.814-.93 1.078-2.368.806-4.392-.38-2.825-2.117-4.512-4.646-4.512S7.734 3.343 7.354 6.17c-.272 2.022-.008 3.46.806 4.39.968 1.107 2.485 1.256 3.84 1.256zM8.84 6.368c.162-1.2.787-3.212 3.16-3.212s2.998 2.013 3.16 3.212c.207 1.55.057 2.627-.45 3.205-.455.52-1.266.743-2.71.743s-2.255-.223-2.71-.743c-.507-.578-.657-1.656-.45-3.205zm11.44 12.868c-.877-3.526-4.282-5.99-8.28-5.99s-7.403 2.464-8.28 5.99c-.172.692-.028 1.4.395 1.94.408.52 1.04.82 1.733.82h12.304c.693 0 1.325-.3 1.733-.82.424-.54.567-1.247.394-1.94zm-1.576 1.016c-.126.16-.316.246-.552.246H5.848c-.235 0-.426-.085-.552-.246-.137-.174-.18-.412-.12-.654.71-2.855 3.517-4.85 6.824-4.85s6.114 1.994 6.824 4.85c.06.242.017.48-.12.654z"></path></g></svg>

                    <div class="ml-4 mr-3 " style="@if(\Illuminate\Support\Facades\Route::currentRouteName()=='profile' )
                        color: rgb(29, 161, 242); @endif"> Profile </div>
                </a>
                <a class="icon More mt-1 d-flex flex-row mb-2" href="#">
                    <svg viewBox="0 0 24 24" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M16.5 10.25c-.965 0-1.75.787-1.75 1.75s.784 1.75 1.75 1.75c.964 0 1.75-.786 1.75-1.75s-.786-1.75-1.75-1.75zm0 2.5c-.414 0-.75-.336-.75-.75 0-.413.337-.75.75-.75s.75.336.75.75c0 .413-.336.75-.75.75zm-4.5-2.5c-.966 0-1.75.787-1.75 1.75s.785 1.75 1.75 1.75 1.75-.786 1.75-1.75-.784-1.75-1.75-1.75zm0 2.5c-.414 0-.75-.336-.75-.75 0-.413.337-.75.75-.75s.75.336.75.75c0 .413-.336.75-.75.75zm-4.5-2.5c-.965 0-1.75.787-1.75 1.75s.785 1.75 1.75 1.75c.964 0 1.75-.786 1.75-1.75s-.787-1.75-1.75-1.75zm0 2.5c-.414 0-.75-.336-.75-.75 0-.413.337-.75.75-.75s.75.336.75.75c0 .413-.336.75-.75.75z"></path><path d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z"></path></g></svg>                    <div  class="ml-4 mr-3"> More </div>
                </a>
            </div>

            {{--Tweet Button--}}

            <button type="button" data-toggle="modal" data-target="#exampleModal" class=" mt-3 pt-2 pb-2  tweet-btn btn btn-primary btn-lg btn-block rounded-pill">Tweet</button>

            {{--Tweet Model--}}
            <div class="modal fade h-auto modal-insert" id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content h-auto">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="text-white">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body h-auto">
                            <div class="tools d-flex flex-row  ">

                                    <div class="img pt-3 ml-3 pr-3">
                                        <img src="@if(!auth()->user()->profile_photo){{asset('storage/'.auth()->user()->profilePhoto())}}
                                        @else {{auth()->user()->profilePhoto()}} @endif"
                                             class="rounded-circle" width="45" height="45">
                                    </div>

                                    <livewire:tweet-bar />



                                <div class="d-flex flex-column ml-3 ">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="login-tab dropdown d-flex flex-row align-items-center justify-content-between p-2" data-toggle="dropdown" role="button">
                <div class="d-flex flex-row">

                        <div class="profile-pic">
                            <img src="@if(!auth()->user()->profile_photo){{asset('storage/'.auth()->user()->profilePhoto())}}
                            @else {{auth()->user()->profilePhoto()}} @endif" >
                        </div>

                    <div class="user-name d-flex flex-column ml-2">
                        <div class="username-tab">
                            <div class="name text-white h6 font-weight-bold">
                                {{auth()->user()->name}}
                            </div>
                            <div class="tagname-tab">
                                {{'@'.auth()->user()->name}}
                            </div>
                        </div>
                    </div>
                </div>
                <a class="more-tab " >
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                    </svg>
                </a>

            </div>

            <div class="dropdown-menu radius drop-size">
                <div class="hover check-login  dropdown-item d-flex flex-row align-items-center justify-content-between p-2" >
                    <div class="d-flex flex-row login-tab2">

                            <div class="profile-pic">
                                <img src="@if(!auth()->user()->profile_photo){{asset('storage/'.auth()->user()->profilePhoto())}}
                                @else {{auth()->user()->profilePhoto()}} @endif" >
                            </div>

                        <div class="user-name d-flex flex-column ml-2">
                            <div class="username-tab">
                                <div class="name text-white h6">
                                        {{auth()->user()->name}}
                                </div>
                                <div class="tagname-tab text-white">
                                    {{'@'.auth()->user()->name}}
                                </div>
                            </div>
                        </div>
                        <a class="more-tab" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </a>
                    </div>
                </div>



                <a href="#" class="hover dropdown-item existingAccount text-white border-bottom border-top border-white pt-3 pb-3">
                    Add an existing account
                </a>



                <a href="{{route('logout')}}" class="hover dropdown-item logout text-white pt-3 pb-3">
                    Log out {{auth()->user()->name}}
                </a>

            </div>
        </div>
        <div class="center-bar col-5 nopadding mt-3 d-none d-lg-block">

            @yield('content')

        </div>

        <div class="center-bar nopadding mt-3 d-none  d-md-block  d-block
    d-sm-block  d-md-none d-sm-none d-lg-none w-100">

            @yield('content')

        </div>

        <div class="right-bar col-4  border-left pt-2 position-sticky pl-4 d-none d-lg-block">
            <div class="searchTwitter d-flex flex-row align-items-center">
                <div class="searchIcon ml-3">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="searchIcon bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </div>

                <form class="searchTwitterInput" action="/search" method="get">

                    <input class= "input rounded-pill p-2" type="text" placeholder=" Search Twitter" name="searchTwitter">
                </form>

            </div>

            <div class="trends p-2">
                <div class="list-group  mt-3">
                    <a href="#" class="list-group-item  listHead text-white border-bottom border-white">Trends for you</a>
                    <a href="" class="trendInfo  list-group-item d-flex flex-column justify-content-between ">
                        <div class="trendCountry">
                            Trending in Jordan
                        </div>
                        <div class="trend text-white">
                            #فلسطين
                        </div>
                        <div class="trendTweetsNum">
                            3,632 Tweets
                        </div>
                    </a>
                    <a href="#" class="p-2 listHead font-weight-light">Show more</a>
                </div>
            </div>
            <div class="mightFollow p-2">
                <div class="list-group   mt-3">
                    <a href="#" class="list-group-item  listHead text-white">You might like</a>
                    <a href="" class="list-group-item d-flex flex-row justify-content-between align-items-center">

                        <button type="button" class="hover follow-right btn ml-3 pl-3 pr-3 rounded-pill">Follow</button>
                    </a>
                    <a href="#" class=" p-2 listHead font-weight-light">Show more</a>
                </div>
            </div>
        </div>
    </div>

</div>
<livewire:scripts />
</body>
<script src="path/to/stickyfill.min.js"></script>
<script src="/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        var div = $('');
        var start = $(div).offset().top;

        $.event.add(window, "scroll", function() {
            var p = $(window).scrollTop();
            $(div).css('position',((p)>start) ? 'fixed' : 'static');
            $(div).css('top',((p)>start) ? '0px' : '');
        });
    });

    window.onscroll = function() {scrollFunction()};
</script>

</html>
