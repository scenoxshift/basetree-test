@extends('layouts.app')
@section('title', 'Chat')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-heading chatHeading">Chat</div>

                    <div class="card-body chatBody" style="height: 70vh;overflow-y: scroll;">
                        <chat-messages :user="{{ auth()->user() }}"></chat-messages>
                    </div>
                    <div class="card-footer">
                        <chat-form :user="{{ auth()->user() }}"></chat-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection