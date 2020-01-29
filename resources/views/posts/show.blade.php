@extends('layouts.layout')

@section('content')

    <div class="col-md-12 blog-main">

        <h1>{{ $post->title }}</h1>

        <br>
        {{ $post -> body }}
        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->user->name}}  :
                            {{$comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment -> body }}
                    </li>
                @endforeach
            </ul>
        </div>

        @if (Auth::user() && Auth::user()->id === $post->user_id)
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post -> id }}/delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        @endif


        <br>

        @if (Auth::user() && Auth::user()->id === $post->user_id)
            <div class="card-block" >
                <form method="POST" action="/posts/{{ $post -> id }}/edit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        @endif
        <hr>

        <div class="card-block">
            <form method="POST" action="/posts/{{ $post -> id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                       <textarea name="body" placeholder="Your comment here. " class="form-control">
                       </textarea>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>

            @include('layouts.errors')
        </div>
    </div>


@endsection
