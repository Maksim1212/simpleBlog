<aside>

    <div class="widget">
        <h3 class="widget-title">Last posts</h3>
        <ul class="widget-posts-list">

            <li>
                <main role="main" class="container">
                    <div class="row">
                        @foreach($posts ->take(4) as $post)
                            <div class="col-md-8 blog-main">
                                <div class="blog-post">
                                    <h2 class="blog-post-title">
                                        <a href="/posts/{{ $post -> id }}">

                                            {{ $post -> title }}
                                        </a>
                                    </h2>
                                    <p class="blog-post-meta">
                                        {{$post->created_at->toFormattedDateString()}}
                                    </p>

                                    <hr>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </main>
            </li>
        </ul>
    </div>
</aside>
