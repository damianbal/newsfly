@extends('layouts.main')

@section('title')

{{ $user->name }}

@endsection()

@section('content')

<b>Subscribtions:</b> {{ $user->subscribers()->count() }}
<br>


{{ $user->description }}

<br>



<div class="section text-center p-3">
<form method="POST" action="{{ route('subscribe-submit') }}">
        <div class="form-group">
            <label>Email</label> 
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input name="email" minlength="3" type="email" class="form-control" placeholder="Your email address..." required>
        </div>

        <button class="btn btn-secondary" type="submit"><i class="fas fa-sign-in-alt"></i> Subscribe</button> 
        <br>
        <small class="text-muted">You can unsubscribe at any time!</small>
    </form>
</div>

@endsection()