@extends('app.layouts.master-layout')
@section('title', 'index')

@section('main')
<div class="grid-container">
    @include('app/includes/navbar')
    @include('app/includes/left-side')
    @include('app/includes/right-side')
    @include('app/includes/footer')
</div>
@endsection