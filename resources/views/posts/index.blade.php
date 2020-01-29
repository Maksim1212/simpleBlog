@extends('layouts.master')

@section('content')
    <main role="main" class="container">

        <div class="row">

            @foreach($posts as $post)
                @include('posts.post')
            @endforeach

        </div><!-- /.row -->

    </main><!-- /.container -->

@endsection
