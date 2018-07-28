@extends('layouts.main')

@section('title') Welcome to Newsfly @endsection

@section('title_head') Welcome @endsection


@section('content')
<div class="p-2">
        Newsfly is a platform which lets people to subscribe to users and get email news every week, users who are subscribed can
        add posts whenever they want and that posts will be sent out to all subscribers.
        <br> Users can also send emails whenever they want.
    
        <div class="row mt-4 text-center">
            <div class="col-sm-4">
                <div class="display-3 mb-1"><i class="fas fa-sign-out-alt"></i></div>
                <div>Subscribers can unsubscribe at any time</div>
            </div>
    
            <div class="col-sm-4">
                <div class="display-3 mb-1"><i class="fas fa-lock"></i></div>
                <div>
                    Emails are kept safe, so no SPAM!
                </div>
            </div>
    
            <div class="col-sm-3">
                <div class="display-3 mb-1"><i class="fas fa-calendar-alt"></i></div>
                <div>
                    Automatically sent for you, or send them by yourself.
                </div>
            </div>
        </div>
    </div>
@endsection