@extends('layouts.main')

@section('title') Unsubscribe @endsection

@section('title_head') Unsubscribe @endsection


@section('content')
<form method="POST" action="{{ route('subscribtions-list') }}">
        @csrf
    
        <div class="form-group">
            <label>Email</label>
            <input name="email" class="form-control" placeholder="Your email addresss" minlength="3" required>
        </div>
    
        <button class="btn btn-secondary" type="submit">Show my Subscriptions</button>
    </form>
@endsection