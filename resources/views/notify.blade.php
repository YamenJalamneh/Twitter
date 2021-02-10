@extends('layouts.app')

@section('title')
<title>Notifications</title>
@endsection

@section('content')


           <div class="border-bottom">
               <div class=" page-head ml-3 mb-3 text-white">
                   Notifications
               </div>
           </div>


           <div class="d-flex flex-column mt-2 ml-3 mr-3  border-0 notifc">
                  <livewire:notifications />
           </div>

@endsection
