@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>منو</span>
        </a>

        <main>
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 weblog-post">
                        <div class="weblog-picture my-5">
                            <img class="img-fluid" src="{{ asset('images/portfolio/3.jpg') }}" alt="blog post image">

                        </div>
                        <div class="weblog-header mb-5">
                            <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</h3>

                        </div>
                        <div class="weblog-date my-5">
                            <h5 class="text-secondary">
                                آذر ۱۳۹۹</h5>

                        </div>

                        <div class="weblog-text my-5">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                                شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها
                                شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی
                                ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط
                                سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        </div>

                    </div>
                </div>
            </div>
        </main>




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
