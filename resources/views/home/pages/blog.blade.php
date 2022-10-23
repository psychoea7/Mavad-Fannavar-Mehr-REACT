@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-bars"></i> 
        </a>

        @include('home.sections.language')

        <div class="to-top rounded-top-btn">
            <a href="#" role="button">
                <i class="fas fa-chevron-circle-up"></i>
            </a>
          </div>

        <img class="img-fluid header-logo" src="{{ asset('images/logo-dark-1.png') }}" alt="">

        <!-- Section 5 -->
        <div class="section-5-container section-container pt-5 pb-5" id="blogPage">
            <div class="container pt-5">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-3 section-5-box wow fadeInUp">
                            <div class="section-5-box-image">
                                <img src="{{ url(env('BLOG_IMAGE_PATH') . $blog->image) }}" alt="portfolio-1" />
                            </div>
                            <h3>
                                <a href="{{route('blogContent' , ['blog' => $blog->id])}}">{{ $blog->title }}</a>
                                <i class="fas fa-angle-left"></i>
                            </h3>
                            <div class="section-5-box-date">
                                <i class="far fa-calendar"></i>{{ $blog->updated_at }}
                            </div>
                            <p class="blog-text">
                                {!! $blog->text !!}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>






        @include('home.sections.footer')
    </div>
@endsection
