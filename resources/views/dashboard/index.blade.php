@extends('layouts.master')

@section('title') Dashboard @endsection

@section('content')

<nav class="nav nav-pills nav-fill">
<a class="nav-item nav-link" href="{{ route('posts-index') }}"><i class="fas fa-envelope-open"></i> Posts</a>
<a class="nav-item nav-link" href="{{ route('posts-create') }}"><i class="fas fa-plus"></i> Create Post</a>
<a data-toggle="tooltip" title="Send news now, inestead of sunday" class="nav-item nav-link" href="{{ route('news-send') }}"><i class="fas fa-envelope"></i> Send News</a>
<a data-toggle="tooltip" title="Show your user profile" class="nav-item nav-link" href="{{ route('user-show', [Auth::user()->id]) }}"><i class="fas fa-user-alt"></i> Profile</a>


</nav>

@endsection