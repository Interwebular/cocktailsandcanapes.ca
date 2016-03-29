@extends('website.layout')

@section('body-classes')
padding dark
@endsection

@section('content')



    <section class="section-panel section-header section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading">News</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $post)
                        <div class="blog-post">
                            <a href="{{ route('blog.post', $post->slug) }}" class="title">{{ $post->title }}</a>
                            <div class="meta">
                                Posted by {{ $post->user->name }} {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </div>
                            <div>
                                {!! $post->content !!}
                            </div>
                        </div>
                    @endforeach
                    {!! $posts->render() !!}
                </div>
                <div class="col-md-4">
                    <h3>Recent Articles</h3>
                    @foreach($posts as $post)
                        <a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a> <br>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
