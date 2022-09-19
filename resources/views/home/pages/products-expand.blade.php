@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>منو</span>
        </a>

        <div class="container my-4 py-5 expanded-product">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h2>نام محصول</h2>
                    <ul>
                        <li>ویژگی های محصول</li>
                        <li>ویژگی های محصول</li>
                        <li>ویژگی های محصول</li>
                        <li>ویژگی های محصول</li>
                    </ul>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                        آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>

                </div>
                <div class="col-md-5 col-sm-12 h-100">
                    <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center p-relative">
                        <div> <img  src="{{ asset('images/prod-1.jpg') }}" alt="HTML5 Logo"/> </div>
                        <div> <img  src="{{ asset('images/prod-2.jpg') }}" alt="HTML5 Logo"/> </div>
                        <div> <img  src="{{ asset('images/prod-3.jpg') }}" alt="HTML5 Logo"/> </div>
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
