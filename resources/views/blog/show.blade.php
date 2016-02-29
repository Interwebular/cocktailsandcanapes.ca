@extends('website.layout')

@section('body-classes')
padding dark
@endsection

@section('content')

    <section class="section-panel section-white section-fluid-height">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="blog-post single">
                        <a href="{{ route('blog.post', $post->slug) }}" class="title">{{ $post->title }}</a>
                        <div class="meta">
                            Posted by {{ $post->user->name }} {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                        </div>
                        <div>
                            {!! $post->content !!}
                        </div>
                    </div>

                    <hr />
                    <div id="disqus_thread"></div>
                    <script>

                    var disqus_config = function () {
                        this.page.url = '{{ route('blog.post', $post->slug) }}';
                        this.page.identifier = '{{ $post->slug }}';
                    };

                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');

                    s.src = '//cocktailsandcanapes.disqus.com/embed.js';

                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

                </div>
                <div class="col-md-4">
                    <h3>Recent Posts</h3>
                    @foreach($recentPosts as $post)
                        <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a> <br>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
