@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">Create a new Post</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('errors'))
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                @foreach (session('errors')->all() as $error)
                                    <ul>
                                        <li>{{ $error }}</li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif

                        <form method="post" action="{{ route('post.store') }}">
                            {{ csrf_field() }}
                            <input type="text" name="title" placeholder="title..." class="form-control" style="margin-bottom: 10px;">
                            <textarea name="content" rows="5" class="form-control" placeholder="content..." style="margin-bottom: 10px;"></textarea>
                            <input type="submit" value="Create a new Post" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">All Posts</div>
    
                    <div class="card-body">
                        @if(!$posts->isEmpty())
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Created by</th>
                                        <th>Created at</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ substr(strip_tags($post->content), 0, 30) }}{{ strlen(strip_tags($post->content)) > 30 ? "....." : "" }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        <td><a href="{{ route('post.show', $post->id) }}" class="btn btn-primary btn-xs">Show Post</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5">{{ $posts->links() }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        @else
                            <h3 class="text-center">No posts.</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
