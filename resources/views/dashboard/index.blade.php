@extends('layouts.master')

@section('title') Dashboard @endsection

@section('content')

<nav class="nav nav-pills nav-fill">
        <a class="nav-item nav-link" href="#">Posts</a>
<a class="nav-item nav-link" href="{{ route('posts-create') }}">Create Post</a>
        <a class="nav-item nav-link" href="#">Send now</a>

</nav>

@endsection