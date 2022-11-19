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

        <img class="img-fluid header-logo" src="{{ asset('images/7.png') }}" alt="">

        <main>
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-md-12 weblog-post">
                        <div class="weblog-picture my-5">
                            <img class="img-fluid" src="{{ url(env('BLOG_IMAGE_PATH') . $blog->image) }}" alt="blog post image">

                        </div>
                        <div class="weblog-header mb-5">
                            <h3>{{$blog->title}}</h3>

                        </div>
                        <div class="weblog-date my-5">
                            <h5 class="text-secondary">
                               {{$blog->updated_at}}</h5>

                        </div>

                        <div class="weblog-text my-5">
                            <p>{!! $blog->text !!}</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>




        @include('home.sections.footer')
    </div>
@endsection
