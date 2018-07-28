@extends('layouts.master')

@section('title') Posts @endsection

@section('title_head') Posts @endsection

@section('content')

@if(count($posts) < 1)
<div class="text-center display-4 p-3 text-muted">
    There is no posts!
    <br>
    <a href='{{ route('posts-create') }}' class="btn btn-secondary"><i class="fas fa-plus"></i> Create new post</a>
</div>
@endif

@foreach($posts as $k => $post)
<div class="post mb-3">
    <div class="row">
        <div class="col-sm-6">
            <h4>{{$k+1}}. {{ $post->title }}</h4>
        </div>
        <div class="col-sm-6 text-center">
            <a href="{{ route('posts-delete', [$post->id]) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Remove</a>
        </div>
    </div>
    <div class="row text-muted p-1">
        <div class="col-sm-12">
            {{ $post->content }}
        </div>
    </div>
</div>
@endforeach

@endsection