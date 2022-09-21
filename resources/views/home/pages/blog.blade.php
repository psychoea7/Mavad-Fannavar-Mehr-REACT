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
                    <div class="col-md-4 section-5-box wow fadeInUp">
                        <div class="section-5-box-image">
                            <img src="{{ asset('images/portfolio/1.jpg') }}" alt="portfolio-1" />
                        </div>
                        <h3>
                            <a href="#">لورم ایپسوم</a>
                            <i class="fas fa-angle-left"></i>
                        </h3>
                        <div class="section-5-box-date">
                            <i class="far fa-calendar"></i> شهریور ۱۴۰۰
                        </div>
                        <p>
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                            هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                    </div>
                    <div class="col-md-4 section-5-box wow fadeInDown">
                        <div class="section-5-box-image">
                            <img src="{{ asset('images/portfolio/2.jpg') }}" alt="portfolio-2" />
                        </div>
                        <h3>
                            <a href="#">متن ساختگی</a>
                            <i class="fas fa-angle-left"></i>
                        </h3>
                        <div class="section-5-box-date">
                            <i class="far fa-calendar"></i> مهر ۱۴۰۱
                        </div>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                    <div class="col-md-4 section-5-box wow fadeInUp">
                        <div class="section-5-box-image">
                            <img src="{{ asset('images/portfolio/3.jpg') }}" alt="portfolio-3" />
                        </div>
                        <h3>
                            <a href="#">سادگی نامفهوم</a>
                            <i class="fas fa-angle-left"></i>
                        </h3>
                        <div class="section-5-box-date">
                            <i class="far fa-calendar"></i> آذر ۱۳۹۹
                        </div>
                        <p>
                            ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز
                            شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل
                            دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
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