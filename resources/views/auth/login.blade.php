@extends('layouts.master-layout')
@section('title', 'Login')

@section('main')
<div class="container">
  <div class="row">
    <div class="columns twelve">
        <form action="/login" method="POST">
          {{ csrf_field() }}
          <h6><strong>Login</strong></h6>
          <label for="username">Username</label>
          <input type="text" class="u-full-width" name="username" id="username" autofocus required>

          <label for="password">Password</label>
          <input type="password" class="u-full-width" name="password" id="password" autofocus required>

          <input type="submit" name="submit" value="Login">
        </form>
    </div>
  </div>
</div>
@endsection
