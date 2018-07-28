@extends('layouts.main')

@section('title')

Users

@endsection()

@section('title_head') Users @endsection


@section('content')

<small>List of users you can subscribe</small>

@foreach($users as $user)
    <div class="row bg-light border p-3 rounded mb-3">
        <div class="col-6 text-center">
            <a href="{{ route('user-show', [$user->id]) }}">{{ $user->name }}</a>
        </div>
        <div class="col-6 text-center">
            Subscribers: {{ $user->subscribers()->count() }}
        </div>
    </div>
@endforeach

<br>

{{ $users->links() }}

@endsection()