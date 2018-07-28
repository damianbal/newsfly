@extends('layouts.master') 
@section('title') Create post
@endsection

@section('title_head') Create post @endsection
 
@section('content')

<form method="POST" action="{{ route ('posts-submit') }}">

    @csrf

    <div class="form-group">
        <label class="bmd-label-floating">Title of post</label>
        <input class="form-control" type="text" name="title" minlength="3" required>
    </div>

    <div class="form-group">
        <label class="bmd-label-floating">Content</label>
        <textarea class="form-control" name="content" minlength="10" required></textarea>
    </div>

    <button class="btn btn-secondary" type="submit"><i class="fas fa-plus"></i> Create</button>

</form>
@endsection