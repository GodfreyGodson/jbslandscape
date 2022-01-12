@extends('layouts.app')


@section('content')

<div class="banner-carousel banner-carousel-2 mb-0">
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div id="banner-area" class="banner-area" style="background-image:url(images/bl.jpg)">

        </div><!-- Banner area end -->
    </div>
</div>


<section class="call-to-action no-padding">
    <div class="card w-75 mx-auto solid-bg" id="sl">
        <div class="card-body">
            <h5 class="card-title text-center">WELCOME TO JBS COMPANY LIMITED BLOG'S</h5>
            <p class="card-text text-justify">Here you can read our news and learn more about our projects also
                your allowed to share or contribute any idea on the comment section.
            </p>

        </div>
    </div>

</section>
<!-- Action end -->

<!-- start of alert message-->
@if (Session::get('message'))
    <div class="container">
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    </div>
@endif
<!-- end of alert message-->

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">

                <!-- posts go here -->
                @foreach ($posts as $post )                                    
                <div class="post">
                    <div class="post-media post-image">
                        <img loading="lazy" src="{{ asset('images/posts/' . $post->image_path) }}" class="img-fluid" alt="post-image">
                    </div>
                    <div class="post-body">
                        <div class="entry-header">
                            <div class="post-meta">
                                <span class="post-author"><i class="far fa-user"> {{ $post->user->name }}</i></span>                            
                                <span class="post-meta-date"><i class="far fa-calendar"></i> {{ $post->updated_at }}</span>
                                @if (Session::get('LoggedUser'))
                                <span class="post-author"><a href="/blog/{{ $post->id }}/edit">Edit</a></span>
                                <span>
                                    <form action="/blog/{{ $post->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">Delete</button>
                                    </form>
                                </span>
                                @endif                                 
                            </div>
                            <h2 class="entry-title">
                                <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
                            </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>{{ Str::limit($post->body, 5) }}</p>
                        </div>
                        
                        @if (Str::length($post->body) > 5)                                                    
                            <div class="post-footer">
                                <a href="/blog/{{ $post->id }}" class="btn btn-primary">Continue Reading</a>
                            </div> <!-- continue reading btn -->
                        @endif
                    </div><!-- post-body end -->
                </div><!-- post end -->
                @endforeach

                <!-- page links -->
                {{ $posts->links() }}                
                
            </div><!-- Content Col end -->

            <div class="col-lg-4">

                <div class="sidebar sidebar-right">
                    <div class="widget recent-posts">
                        <h3 class="widget-title">Other Articles</h3>
                        @forelse ($others as $other )
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="{{ asset('images/posts/' . $other->image_path) }}"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="/blog/{{ $other->id }}">{{ $other->title }}</a>
                                    </h4>
                                </div>
                            </li><!-- post end-->                               
                        </ul>
                        @empty
                            <h1> There are no posts</h1>
                        @endforelse                        

                    </div><!-- Recent post end -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="/blog/category/civic">Civic/Goverment</a></li>
                            <li><a href="/blog/category/commercial">Commercial</a></li>
                            <li><a href="/blog/category/residential">Residential</a></li>
                        </ul>
                    </div><!-- Categories end -->

                    <div class="widget">
                        <h3 class="widget-title">Archives </h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="/blog/archive/12-2021">December 2021</a></li>
                        </ul>
                    </div><!-- Archives end -->                    

                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

@endsection