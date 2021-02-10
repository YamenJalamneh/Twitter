@foreach($notifications as $notification)
    <div class="border-bottom border-white">
<div class="list-group border-0 d-flex flex-row p-1">

    <div class="img">
        <img src="@if(!$notification->user->profile_photo){{asset('storage/'.$notification->user->profilePhoto())}}
        @else {{$notification->user->profilePhoto()}} @endif"   class="rounded-circle" width="50" height="50" alt="">
    </div>

    <a href="/profile/" type="button" id="myDiv" class="mb-2 list-group-item list-group-item-action text-white border-0">
                       {{$notification->user->name." ".$notification->text}}
    </a>
</div>
    </div>
@endforeach
