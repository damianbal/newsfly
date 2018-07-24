@extends('layouts.master') @section('title') Sign Up @endsection @section('content')

<div class="alert alert-info" role="alert">
    <i class="fas fa-info-circle"></i> Sign Up for an account so you can create posts and users who subscribe to you can get them!
</div>

<div class="alert alert-secondary" role="alert">
    <i class="fas fa-lightbulb"></i> If you just want to subscribe to an account, you don't need to create account!

</div>

<form method="POST" action="{{ route('sign-up-submit') }}">
    @csrf
    <div class="form-group">
        <label>Email address</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input minlength="3" name="password" type="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label>Name</label>
        <input minlength="3" name="name" type="text" class="form-control" placeholder="Your name" required>
    </div>

    <div class="form-group">
        <label>Description</label>
        <input minlength="5" name="description" type="text" class="form-control" placeholder="Description of your account" required>
    </div>

    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>

@endsection