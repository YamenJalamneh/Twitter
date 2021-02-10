@extends('layouts.app')

@section('title')
    <title>profile</title>
@endsection

@section('content')
    <div class="username-box">
        <a class="arrowuser" href="{{route('home')}}">
            <svg  viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
        </a>
        <div class="username">
            <a href=" " class="name text-white">{{$user->name}}</a>
            <a href=" " class="tweetsnum"> {{$user->tweets->count()}} </a>
        </div>
    </div>

    <div class="backgroundImg ">
        <img src="@if(!$user->background_photo){{asset('storage/'.$user->Defaultbackground())}}
           @else {{$user->backgroundPhoto()}} @endif"
             class="w-100" height="150px">
    </div>

    <div class="editProfile mt-5">

            <div class="profilePic">
                <img src="@if(!$user->profile_photo){{asset('storage/'.'default-user-image.png')}}
                @else {{$user->profilePhoto()}} @endif"
                     class="img-fluid" width="45" height="45" />
            </div>

            @if(auth()->user()->id===$user->id)
            <livewire:edit-profile />
            @else
            <livewire:follow  :user="$user" />
            @endif




    </div>

    <div class="userBio">
        <p class="username text-white">{{$user->name}}</p>
        <p class="tag">{{'@'.$user->name}}</p>
        <p class="bio text-secondary">{{$user->bio}}</p>
        <div class="joined d-flex flex-row align-items-center">
            <div class="joinIcon">
                <svg width="18px" height="18px" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                    <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
            </div>
            <div class="joinDate"> Joined {{$user->created_at->format('F Y')}} </div>
        </div>
    </div>
    <div class="followCount">
        <div class="following">
            <span class="followingNum text-white">{{\App\Models\Follow::where('following',$user->id)->get()->count()}}</span>
            Following
        </div>

        <div class="follower">
            <span class="followerNum text-white">{{\App\Models\Follow::where('follower',$user->id)->get()->count()}} </span>
            Follower
        </div>
    </div>

    <div class="tabbable "> <!-- Only required for left/right tabs -->

        <ul class="nav nav-pills nav-fill  pb-0" id="pills-tab" role="tablist">
            <li class="nav-item tab-x" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                   role="tab"  aria-selected="true">Tweets</a>
            </li>
            <li class="nav-item tab-x" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                   role="tab"  aria-selected="false">Tweets & replies</a>
            </li>
            <li class="nav-item tab-x" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                   role="tab" aria-controls="pills-contact" aria-selected="false">Media</a>
            </li>
            <li class="nav-item tab-x" role="presentation">
                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                   role="tab"   aria-selected="true">Likes</a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <livewire:profile-tweets :userid="$userid"/>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">nnn</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        </div>

    </div>
@endsection
