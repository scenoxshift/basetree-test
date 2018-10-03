@extends('layouts.app')
@section('title', 'Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $entity->title }} 
                    </div>
                    <div class="card-body">
                        {{ $entity->content }}
                    </div>
                    <div class="card-footer text-right">
                        Created by: <b>{{ $entity->user->name }}</b> <a href="{{ route('home') }}" class="btn btn-link"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</a>
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('errors'))
                    <div class="alert alert-danger mt-5">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        @foreach (session('errors')->all() as $error)
                            <ul>
                                <li>{{ $error }}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif

                <div class="card mt-5">
                    <div class="card-header">
                        Comments <span class="badge badge-primary">{{ $entity->comments()->count() }}</span>
                    </div>
                    <div class="card-body">
                        @forelse ($entity->comments()->orderBy('id', 'desc')->get() as $comment)
                            <div class="card mb-2">
                                <div class="card-body">
                                    {{ $comment->comment }}
                                </div>
                                <div class="card-footer text-right pt-0 pb-0">
                                    <small>By: {{ $comment->user->name }}</small>
                                </div>
                            </div>
                        @empty
                            There are no Comments
                        @endforelse
                    </div>
                    <div class="card-footer">
                        <form action="{{ url('/comment/store') }}" method="post" style="display: flex;">
                            {{ csrf_field() }}
                            <input type="hidden" name="post_id" value="{{ $entity->id }}">
                            <input type="text" name="comment" placeholder="comment..." class="form-control" style="border-radius: 0;">
                            <input type="submit" value="Comment" class="btn btn-primary" style="border-radius: 0;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
