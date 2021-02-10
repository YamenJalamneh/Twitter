@foreach($comments as $comment)
<div class="comment_body d-flex flex-column border-bottom border-white">

    <div class="d-flex flex-row mt-4">
        <img src="@if(!$comment->user->profile_photo){{asset('storage/'.$comment->user->profilePhoto())}}
        @else {{$comment->user->profilePhoto()}} @endif"   class="rounded-circle ml-3" width="50px" height="50px">
        <div class="ml-2 d-flex flex-column ">
            <div class="ml-2 d-flex flex-row">
                <p class="font-weight-bolder mt-1 text-white"> </p>
                <p class="text-secondary comment_mail ml-1 mt-2">{{'@'.$comment->user->name}}</p>
                <p class="text-secondary comment_mail ml-1 mt-2">{{$comment->created_at->diffForHumans()}}</p>
            </div>
            <div class="text-secondary ml-2 reply_comment mt-n2"><p class="">Replying to <span class="text-info">{{$tweet->user->name}}</span></p></div>
        </div>
    </div>

    <div>
        <div class="pl-4 pr-3 text-white"><p>{{$comment->body}}</p></div>
        <div class=" "><img src="/" class="img-fluid  w-auto h-auto img_comment" alt=""></div>
        <div class="tweet-icons d-flex flex-row justify-content-between pl-4 pr-4 border-bottom pb-2">
            <a class="comments" href="#">
                <svg  viewBox="0 0 16 16" class="comment_svg bi bi-chat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                </svg>

            </a>
            <a class="replay" href="#">
                <svg viewBox="0 0 16 16" class="comment_svg bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                    <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
                </svg>
            </a>

            <a class="likes" href="/like/tweet/">
                <svg  viewBox="0 0 16 16" class="comment_svg bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            </a>


            <a class="share" href="#">
                <svg  viewBox="0 0 16 16" class="comment_svg bi bi-box-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
                    <path fill-rule="evenodd" d="M7.646.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 1.707V10.5a.5.5 0 0 1-1 0V1.707L5.354 3.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
            </a>
        </div>
    </div>

</div>
@endforeach
