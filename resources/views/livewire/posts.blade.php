<div>
    @foreach($tweets as $tweet)
    <livewire:post :tweet="$tweet" :key="$tweet->id" />
    @endforeach
</div>
