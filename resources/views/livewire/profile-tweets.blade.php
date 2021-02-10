<div>
    @foreach($tweets as $tweet)
        <livewire:profile-tweet :tweet="$tweet" :userid="$userid" :key="$tweet->id" />
    @endforeach
</div>
