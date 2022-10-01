@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>منو</span>
        </a>

        <div class="top-content section-container" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="wow fadeIn">

                            <strong>وبلاگ بازرگانی اسپیدکار</strong>
                        </h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                واردات و عرضه آلیاژ ها صنعتی با پشتوانه بیش از ۱۰ سال تجربه فعالیت بازرگانی و خدمات مهندسی
                                سطح

                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                صفحه اصلی <i class="fas fa-home"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="section-5-container section-container" id="blogPage">
            <div class="container mt-5 py-3">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 section-5-box wow fadeInUp">
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
                            <p>
                                {!! $blog->title !!}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>












        <footer class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        &copy; شرکت به نگاران تجارت آزما <a href=""> به نگاران تجارت آزما</a>.
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
