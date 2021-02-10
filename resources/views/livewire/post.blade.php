<div class="tweet tweet list-group" >
<div class="tweet-card list-group-item ">
    <div class="tweetProfileHead d-flex flex-row justify-content-between">
        <div class="d-flex flex-row">

            <div class="poster-image">
                <img src="@if(!$tweet->user->profile_photo){{asset('storage/'.'default-user-image.png')}}
                @else {{$tweet->user->profilePhoto()}} @endif">
            </div>

            <div class="tweet-head d-flex flex-row mt-2">
                <div class="tweet-name">
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
        <div class="tweet-body text-white" onclick="document.location='/comment/{{$tweet->id}}'">
            <div class="mb-2">{{$tweet->body}}</div>
                                    <div><img src="@if ($tweet->photo) {{ $tweet->photo() }} @endif" class="img-fluid img-post" alt=""></div>
        </div>
        <div class="tweet-icons">
            <a class="comments text-white" href="#" data-bs-target="#comment-{{$tweet->id}}" data-bs-toggle="modal">
                <svg  viewBox="0 0 16 16" class="bi bi-chat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                </svg>
                <span>12</span>
            </a>

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


<livewire:comment-form :tweet="$tweet"/>




