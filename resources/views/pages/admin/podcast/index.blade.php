@extends('layouts.admin')

@section('title', 'Christ Ambassadors - No. ! Site for Christian Podcasts')
    


@section('content')
    @include('partials.admin.sidebar') 
    @include('partials.admin.topheader') 

    <div class="page page-center">
        @include('pages.admin.podcast.getpodcast');
    </div>
    
    
    @include('pages.admin.podcast.addpodcast');

@endsection

@section('scripts')

@endsection


@push('script')

@endpush