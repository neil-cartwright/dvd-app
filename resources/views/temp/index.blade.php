@extends('temp/layouts.master-layout')
@section('title', 'index')

@section('main')
<div class="grid-container">
    @include('temp/includes/navbar')
    @include('temp/includes/left-side')
    @include('temp/includes/right-side')
    @include('temp/includes/footer')
</div>
@endsection