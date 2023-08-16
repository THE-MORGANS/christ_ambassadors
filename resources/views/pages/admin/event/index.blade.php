@extends('layouts.admin')

@section('title', 'Christ Ambassadors - No. ! Site for Christian Podcasts')
    


@section('content')
    @include('partials.admin.sidebar') 
    @include('partials.admin.topheader') 

    <div class="page page-center">
        @include('pages.admin.event.getevent');
    </div>
    
    
    @include('pages.admin.event.addevent');

@endsection

@section('scripts')

@endsection


@push('script')
<script>
    $(welcome).on('hidden.bs.modal', function(){
        Livewire.emit('type');
    });

    window.addEventListener('hide_add_author_modal', function(event){
        $('modal-report').modal('hide');
    })
</script>
@endpush