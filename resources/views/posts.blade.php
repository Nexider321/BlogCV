@extends('layout')


@section('content')
<div class="news-area pt-110 bgs" id="blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-xl-6">
                <div class="section-title text-center">
                    <h3 class="section-name pc">LATEST NEWS</h3>
                    <h2>My Latest Articles</h2>
                    <p>

                    </p>

                </div>
            </div>
        </div>

        <div class="row mt-45 pb-90">
            @foreach($posts as $post)
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog mb-30 pb-40">
                        <div class="blog-img">
                            <img src="/{{$post->image}}" alt="news item 1">
                        </div>
                        <div class="blog-meta">
                            <div class="date">
                                {{ date_format($post->created_at, 'M d, y') }}
                            </div>
                        </div>
                        <div class="blog-details pl-30 mt-35 pr-30">
                            <div class="blog-title mb-10">
                                <a href="/post/{{$post->id}}">
                                    <h2>
                                        {{ $post->title }}
                                    </h2>
                                </a>
                            </div>
                            <p class="mb-10">
                                {{ Str::limit($post->body, 50, '...') }}
                            </p>
                            <div class="blog-button">
                                <a href="/post/{{$post->id}}">Read More &nbsp; <i class="fas fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </div>
@endsection
