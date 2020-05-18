@extends('temp/layouts/master-layout')
@section('title', '404 Error')

@section('main')
<div class="bg-gray-200 p-4 flex justify-center">
    <p>That page does not seem to exist. <a href="{{ url('/')}}">Back to the main site</p>
</div>
@endsection