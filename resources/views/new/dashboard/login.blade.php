@extends('new.dashboard.layout')
@section('dashboard-content')
<form method="post" class="col-12 col-md-4 offset-md-4 " action="{{ route('login') }}">
<img src="{{ asset('images/Final Logo-01.png') }}" class="mx-auto d-block mb-5" width="200">
    @csrf
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="name" class="form-control p_input">
  </div>
  <div class="form-group">
    <label>Password *</label>
    <input type="password" name="password" class="form-control p_input">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
  </div>

  @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif
</form>

@endsection