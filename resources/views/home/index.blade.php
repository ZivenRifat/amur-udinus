@extends('layouts.app')

@section('content')

    @include('components.hero')
    @include('components.spotlights')
    @include('components.media-platforms')
    {{-- @include('components.merchandise') --}}
    @include('components.news')
    @include('components.partners')
    @include('layouts.footer')

@endsection
