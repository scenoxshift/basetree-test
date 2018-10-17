@extends('layouts.app')
@section('title', 'Notifications')
@section('content')
    <div class="container">
        
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All read notifications</div>

                    <div class="card-body">
                        @if($notifications)
                            @foreach($notifications as $notification)
                                <li>
                                    {{ $notification['data']['userName'] }} commented on : 
                                    <a target="_blank" href="{{ route('post.show', [$notification['data']['post']['id']]) }}">
                                        {{ $notification['data']['post']['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <h3 class="text-center">No notifications.</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
