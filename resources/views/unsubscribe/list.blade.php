@extends('layouts.main')

@section('title') Subscribtions list @endsection

@section('title_head') Subscribtions list @endsection


@section('content')

    <div class="mt-3"></div>

    @if(count($subscribers) < 1)
        <div class="text-center display-4 text-muted">That email does not subscribe to anybody</div>
    @endif

    @foreach($subscribers as $sub)
    <div class="row mb-2 p-2">
        <div class="col-sm-6 text-center"><b>{{ $sub->user->name }}</b></div>
        <div class="col-sm-6 text-center">
            <a href="{{ route('unsubscribe', [$sub->user->id, $sub->email]) }}" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Unsubscribe</a>
        </div>
    </div>
    @endforeach

@endsection