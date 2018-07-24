@extends('layouts.main')

@section('title')

{{ $user->name }}

@endsection()

@section('content')

{{ $user->description }}

<br>

Subscribtions: {{ $user->subscribers()->count() }}

@endsection()