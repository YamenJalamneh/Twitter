<div>
    @if(auth()->user())
        <button type="button" wire:click.prevent="mount({{auth()->user()}})"  class="btn btn-outline-primary editButton" data-toggle="modal">Set up profile</button>
    @endif
    <div class="modal fade profile" id="EditProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form wire:submit.prevent="store">
                @csrf
                <div class="modal-content">
                    <div class="modal-header d-flex flex-row justify-content-between align-items-center ">
                        <div class=" d-flex flex-row justify-content-center align-content-center ">
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title ml-3 text-white" id="EditProfile">Set up profile</h5>
                        </div>

                        <div>
                            <button type="submit"  class="tweet-btn btn btn-primary btn-lg btn-block rounded-pill">Save</button>
                        </div>
                    </div>
                    <div class="modal-body p-0">

                        <livewire:photo-profile />


                        {{--  Bio   --}}
                        <div class="userInfo d-flex flex-column ml-3 mb-4 mr-3  ">
                            <div class="inputName">
                                <input class="form-control" style="height: 4rem ; border-radius: 15px"
                                       wire:model.defer="state.bio" type="text" placeholder="Bio" name="bio">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<script>
    window.addEventListener('openModal', event => {
        $("#EditProfile").modal('show');
    })

    window.addEventListener('closeModal', event => {
        $("#EditProfile").modal('hide');
    })
</script>

