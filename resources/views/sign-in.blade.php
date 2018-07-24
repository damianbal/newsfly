@extends('layouts.master') @section('title') Sign In @endsection @section('content')

<div class="alert alert-info" role="alert">
<i class="fas fa-info-circle"></i> Do you need an account? <a class="alert-link" href='{{ route('sign-up') }}'>Sign up</a>
</div>


<form method="POST" action="{{ route('sign-in-submit') }}">
    @csrf
    <div class="form-group">
        <label>Email address</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input minlength="3" name="password" type="password" class="form-control" placeholder="Password" required>
    </div>


    <button type="submit" class="btn btn-primary">Sign In</button>
</form>

@endsection