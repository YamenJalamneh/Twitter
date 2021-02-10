<div>
    <form action="" wire:submit.prevent="storeBack">

        @if($background)

            <div class="d-flex align-items-center mt-3 mb-1">
                <button type="submit" class="rounded-pill bg-success
                    border-0 text-white  ml-4">
                    <svg class="" fill="none" stroke="currentColor" style="height: 1.5rem; width: 1.5rem;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" /></svg>
                </button>

                <button wire:click.prevent="$set('background' , null)" class="rounded-pill bg-danger
                        border-0 text-white "><svg class="svg-modal-profile" fill="none" stroke="currentColor"  style="height: 1.5rem; width: 1.5rem;"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" /></svg></button>
            </div>
        @endif

        @error('background')
        <span class="font-semibold text-pink-500 text-xs mt-2">{{$message}}</span>
        @enderror

        <label for="background">
        <div class="bg-image w-auto ">
                <img src="@if($background){{$background->temporaryUrl()}}@elseif(!auth()->user()->background_photo){{asset('storage/'.auth()->user()->Defaultbackground())}}
           @else {{auth()->user()->backgroundPhoto()}} @endif" class="background mt-3 h-25 img-fluid">
        </div>
        </label>

        <input type="file" name="background" id="background" class="sr-only" wire:model="background">
    </form>



    <form action="#" wire:submit.prevent="storePhoto" class="flex flex-col justify-between items-center">
        <div class="profilePic mt-n5 mb-1 ml-1">
            <label for="photo">
               <img src="@if ($photo) {{ $photo->temporaryUrl() }} @elseif(!auth()->user()->profile_photo)
               {{asset('storage/'.auth()->user()->profilePhoto())}}@else{{auth()->user()->profilePhoto()}}@endif"  class="img-fluid mb-5 ">
            </label>
        </div>

        @if($photo)

            <button type="submit" class="mb-2 rounded-pill bg-success
            border-0 text-white  ml-4">
                <svg class="" fill="none" stroke="currentColor" style="height: 1.5rem; width: 1.5rem;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" /></svg>
            </button>

            <button wire:click.prevent="$set('photo' , null)" class="mb-2 rounded-pill bg-danger
            border-0 text-white "><svg class="svg-modal-profile" fill="none" stroke="currentColor"  style="height: 1.5rem; width: 1.5rem;"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" /></svg></button>
        @endif

        @error('photo')
        <span class="font-semibold text-pink-500 text-xs mt-2">{{$message}}</span>
        @enderror

        <input type="file" name="photo" id="photo" class="sr-only" wire:model="photo">



    </form>
</div>
