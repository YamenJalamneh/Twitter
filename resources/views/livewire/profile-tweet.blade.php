<div class="tweet tweet list-group">
    <div class="tweet-card list-group-item ">
        <div class="tweetProfileHead d-flex flex-row justify-content-between">
            <div class="d-flex flex-row">

                <div class="poster-image">
                    <img src="@if(!$tweet->user->profile_photo){{asset('storage/'.'default-user-image.png')}}
                    @else {{$tweet->user->profilePhoto()}} @endif" >
                </div>

                <div class="tweet-head d-flex flex-row">
                    <div class="tweet-name mt-2">
                        <div>
                            <a class="name text-white">
                                {{$tweet->user->name}}
                            </a>
                        </div>
                        <div class="tag text-secondary pt-1">
                            {{'@'.$tweet->user->name}}
                        </div>
                        <div class="dot text-secondary">
                            .
                        </div>
                        <div>
                            <a class="time text-secondary">
                                {{$tweet->created_at->diffForHumans()}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <a class="more dropdown" data-toggle="dropdown" role="button">
                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                </svg>
            </a>
            <div class="tweetDrop dropdown-menu rounded-lg">
                <a href="#" type="button" class="edit dropdown-item d-flex flex-row align-items-center" data-toggle="modal" data-target="#EditTweet">
                    <svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    <span class="ml-2">Edit</span>
                </a>
                <div class="modal fade EditTweet-modal" id="EditTweet" tabindex="2" role="dialog" aria-labelledby="EditProfile" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content h-100">
                            <form action="/insert/info" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header model-title d-flex flex-row justify-content-between">
                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <button type="button" class="close " id="exampleModalLongTitle" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="mt-2 ml-3">
                                            <h4 >Edit profile</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary rounded-pill">Save</button>
                                    </div>
                                </div>
                                <div class="modal-body p-0 m-0">


                                    <div class="bg-image w-auto">
                                        <img src="/backgroundimage.svg" alt="background image" class="img-fluid">
                                    </div>

                                    <div class="profile-image mt-n5">
                                        <img src="/PP.png" class="p-image rounded-circle w-25 mb-5" alt="Profile image">
                                    </div>
                                    <div class="userInfo d-flex flex-column ml-3 mb-4 mr-3 rounded ">
                                        <div class="label ml-2">Name </div>
                                        <div class="inputName">
                                            <input class= "input p-2 w-100" type="text" placeholder="" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="userInfo d-flex flex-column ml-3 mb-4 mr-3 rounded ">
                                        <div class="label ml-2">Bio</div>
                                        <div class="inputName">
                                            <input class= "input bio p-2 w-100" type="text" name="bio" value=" ">
                                        </div>
                                    </div>


                                    <div class="userInfo d-flex flex-column ml-3 mb-4 mr-3 rounded ">
                                        <div class="label ml-2">Location </div>
                                        <div class="inputName">
                                            <input class= "input p-2 w-100" type="text" placeholder="" name="location" value=" ">
                                        </div>
                                    </div>

                                    <div class="userInfo d-flex flex-column ml-3 mb-4 mr-3 rounded ">
                                        <div class="label ml-2">Website </div>
                                        <div class="inputName">
                                            <input class= "input p-2 w-100" type="text" placeholder="" name="website" value=" ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="dropdown-divider"></div>

                <a href="#" wire:click="delete" class="delete dropdown-item d-flex flex-row align-items-center">
                    <svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                    <span class="ml-2">Delete</span>
                </a>

            </div>

        </div>
        <div class="tweetBodyIcons d-flex flex-column">
            <div class="tweet-body text-white" onclick="document.location='/tweet/'">
                <div class="mb-2">{{$tweet->body}}</div>
                <div><img src="@if ($tweet->photo) {{ $tweet->photo() }} @endif" class="img-fluid img-post" alt=""></div>
            </div>
            <div class="tweet-icons">
                <a class="comments text-white" href="#" data-toggle="modal" data-target="#comment">
                    <svg  viewBox="0 0 16 16" class="bi bi-chat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                    </svg>
                    <span>12</span>
                </a>
                <div class="modal fade EditProfile-modal comment-modal" id="comment" tabindex="-1" role="dialog" aria-labelledby="EditProfile" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content h-100">
                            <form action="/comment/" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-dialog w-100 h-auto">
                                    <div class="modal-content border-0 h-auto">
                                        <div class="modal-header border-bottom d-flex justify-content-start">
                                            <div>
                                                <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" class="text-info h2">&times;</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-body h-auto">
                                            <div class="d-flex flex-row">

                                                <div class="img pt-3 ml-3">
                                                    <img src=" "
                                                         alt="" class="rounded-circle" height="50px" width="50px">
                                                </div>

                                                <div class="img pt-3 ml-3">
                                                    <img src="/PP.png"
                                                         class="rounded-circle" height="50px" width="50px">
                                                </div>

                                                <div class="comment-body d-flex flex-column justify-content-between ml-2 mt-2">
                                                    <div class="tweet-user font-weight-bold h6 d-flex flex-row"><p> </p> <span class="text-secondary font-weight-lighter ml-2 comment-details"> </span> <span class="text-secondary font-weight-lighter ml-1 comment-details">·</span></div>
                                                    <div class="mt-n3"><p> </p></div>
                                                    <div><p class="text-secondary">Replying <span class="text-info"> </span> </p></div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row">

                                                <div class="img pt-3 ml-3">
                                                    <img src=" "
                                                         alt="" class="rounded-circle" height="50px" width="50px">
                                                </div>

                                                <div class="img pt-3 ml-3">
                                                    <img src="/PP.png"
                                                         class="rounded-circle" height="50px" width="50px">
                                                </div>


                                                <div class="comment-body d-flex flex-column justify-content-between ml-2 mt-2">
                                                    <div><textarea id="exampleFormControlTextarea11 " class="w-100 addTweet  scroll border-0 pt-3 focus" aria-label="With textarea" style=" resize: none;" placeholder="Tweet your reply" name="body"></textarea></div>
                                                    <div><img id="output" class="img-fluid "/></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-between flex-row border-0">
                                            <div class="d-flex flex-row border-0 ">
                                                <div class="p-2">
                                                    <label for="img_upload">
                                                        <div class="icon-post-hover" style="cursor: pointer">
                                                            <svg viewBox="0 0 24 24" class="svg-reply r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M19.75 2H4.25C3.01 2 2 3.01 2 4.25v15.5C2 20.99 3.01 22 4.25 22h15.5c1.24 0 2.25-1.01 2.25-2.25V4.25C22 3.01 20.99 2 19.75 2zM4.25 3.5h15.5c.413 0 .75.337.75.75v9.676l-3.858-3.858c-.14-.14-.33-.22-.53-.22h-.003c-.2 0-.393.08-.532.224l-4.317 4.384-1.813-1.806c-.14-.14-.33-.22-.53-.22-.193-.03-.395.08-.535.227L3.5 17.642V4.25c0-.413.337-.75.75-.75zm-.744 16.28l5.418-5.534 6.282 6.254H4.25c-.402 0-.727-.322-.744-.72zm16.244.72h-2.42l-5.007-4.987 3.792-3.85 4.385 4.384v3.703c0 .413-.337.75-.75.75z"></path><circle cx="8.868" cy="8.309" r="1.542"></circle></g>
                                                            </svg>
                                                            <input type="file" class="form-control-file d-none" id="img_upload"
                                                                   accept="image/*" onchange="loadFile(event)" name="comment_image">
                                                        </div>
                                                    </label>
                                                </div>

                                                <input type="file" class="form-control-file d-none" id="img_upload"
                                                       accept="image/*" onchange="loadFile(event)" name="image">
                                                <div class="p-2">
                                                    <svg viewBox="0 0 24 24" class="svg-reply r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue">
                                                        <g><path d="M19 10.5V8.8h-4.4v6.4h1.7v-2h2v-1.7h-2v-1H19zm-7.3-1.7h1.7v6.4h-1.7V8.8zm-3.6 1.6c.4 0 .9.2 1.2.5l1.2-1C9.9 9.2 9 8.8 8.1 8.8c-1.8 0-3.2 1.4-3.2 3.2s1.4 3.2 3.2 3.2c1 0 1.8-.4 2.4-1.1v-2.5H7.7v1.2h1.2v.6c-.2.1-.5.2-.8.2-.9 0-1.6-.7-1.6-1.6 0-.8.7-1.6 1.6-1.6z"></path>
                                                            <path d="M20.5 2.02h-17c-1.24 0-2.25 1.007-2.25 2.247v15.507c0 1.238 1.01 2.246 2.25 2.246h17c1.24 0 2.25-1.008 2.25-2.246V4.267c0-1.24-1.01-2.247-2.25-2.247zm.75 17.754c0 .41-.336.746-.75.746h-17c-.414 0-.75-.336-.75-.746V4.267c0-.412.336-.747.75-.747h17c.414 0 .75.335.75.747v15.507z"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="p-2">
                                                    <svg viewBox="0 0 24 24" class="svg-reply r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M20.222 9.16h-1.334c.015-.09.028-.182.028-.277V6.57c0-.98-.797-1.777-1.778-1.777H3.5V3.358c0-.414-.336-.75-.75-.75s-.75.336-.75.75V20.83c0 .415.336.75.75.75s.75-.335.75-.75v-1.434h10.556c.98 0 1.778-.797 1.778-1.777v-2.313c0-.095-.014-.187-.028-.278h4.417c.98 0 1.778-.798 1.778-1.778v-2.31c0-.983-.797-1.78-1.778-1.78zM17.14 6.293c.152 0 .277.124.277.277v2.31c0 .154-.125.28-.278.28H3.5V6.29h13.64zm-2.807 9.014v2.312c0 .153-.125.277-.278.277H3.5v-2.868h10.556c.153 0 .277.126.277.28zM20.5 13.25c0 .153-.125.277-.278.277H3.5V10.66h16.722c.153 0 .278.124.278.277v2.313z"></path></g></svg>
                                                </div>
                                                <div class="p-2">
                                                    <svg viewBox="0 0 24 24" class="svg-reply r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z"></path><path d="M12 17.115c-1.892 0-3.633-.95-4.656-2.544-.224-.348-.123-.81.226-1.035.348-.226.812-.124 1.036.226.747 1.162 2.016 1.855 3.395 1.855s2.648-.693 3.396-1.854c.224-.35.688-.45 1.036-.225.35.224.45.688.226 1.036-1.025 1.594-2.766 2.545-4.658 2.545z"></path><circle cx="14.738" cy="9.458" r="1.478"></circle><circle cx="9.262" cy="9.458" r="1.478"></circle></g></svg>
                                                </div>
                                                <div class="p-2">
                                                    <svg viewBox="0 0 24 24" class="svg-reply r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M-37.9 18c-.1-.1-.1-.1-.1-.2.1 0 .1.1.1.2z"></path><path d="M-37.9 18c-.1-.1-.1-.1-.1-.2.1 0 .1.1.1.2zM18 2.2h-1.3v-.3c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v.3H7.7v-.3c0-.4-.3-.8-.8-.8-.4 0-.8.3-.8.8v.3H4.8c-1.4 0-2.5 1.1-2.5 2.5v13.1c0 1.4 1.1 2.5 2.5 2.5h2.9c.4 0 .8-.3.8-.8 0-.4-.3-.8-.8-.8H4.8c-.6 0-1-.5-1-1V7.9c0-.3.4-.7 1-.7H18c.6 0 1 .4 1 .7v1.8c0 .4.3.8.8.8.4 0 .8-.3.8-.8v-5c-.1-1.4-1.2-2.5-2.6-2.5zm1 3.7c-.3-.1-.7-.2-1-.2H4.8c-.4 0-.7.1-1 .2V4.7c0-.6.5-1 1-1h1.3v.5c0 .4.3.8.8.8.4 0 .8-.3.8-.8v-.5h7.5v.5c0 .4.3.8.8.8.4 0 .8-.3.8-.8v-.5H18c.6 0 1 .5 1 1v1.2z"></path><path d="M15.5 10.4c-3.4 0-6.2 2.8-6.2 6.2 0 3.4 2.8 6.2 6.2 6.2 3.4 0 6.2-2.8 6.2-6.2 0-3.4-2.8-6.2-6.2-6.2zm0 11c-2.6 0-4.7-2.1-4.7-4.7s2.1-4.7 4.7-4.7 4.7 2.1 4.7 4.7c0 2.5-2.1 4.7-4.7 4.7z"></path><path d="M18.9 18.7c-.1.2-.4.4-.6.4-.1 0-.3 0-.4-.1l-3.1-2v-3c0-.4.3-.8.8-.8.4 0 .8.3.8.8v2.2l2.4 1.5c.2.2.3.6.1 1z"></path></g></svg>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row w-25">
                                                <button type="submit" class="w-25 border-0 tweet-btn btn btn-primary btn-lg rounded-pill">Reply</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <a class="replay text-white" href="#">
                    <svg viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                        <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                    </svg>

                    <span>15</span>
                </a>
                @if(!auth()->user()->likes()->where('tweet_id',$tweet->id)->count())
                    <a class="likes text-white" wire:click.prevent="storeLike" >
                        <svg  viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        @if($tweet->likes->count())
                            <span> {{$tweet->likes->count()}}</span>
                        @endif
                    </a>
                @else
                    <a class="unlikes" href="#" wire:click.prevent="unlike">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="unlikes bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                        </svg>

                        @if($tweet->likes->count())
                            <span> {{$tweet->likes->count()}}</span>
                        @endif
                    </a>
                @endif

                <a class="share text-white" href="#">
                    <svg  viewBox="0 0 16 16" class="bi bi-box-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                        <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                    </svg>
                    15
                </a>
            </div>
        </div>
    </div>
</div>
