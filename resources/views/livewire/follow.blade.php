<div>
 @if( \App\Models\Follow::where('following',auth()->user()->id)->where('follower',$user->id)->get()->count())
        <a href=" " wire:click.prevent="unfollow" class="btn btn-outline-primary editButton">Un Follow</a>
    @else
        <a href="" wire:click.prevent="follow" class="btn btn-outline-primary editButton">Follow</a>
    @endif
</div>
