@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>منو</span>
        </a>

        <!-- Top content -->
        <div class="top-content section-container" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="wow fadeIn">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                            <strong>از صنعت چاپ</strong>
                        </h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                با استفاده از طراحان گرافیک است.
                                <a href=""><strong>لورم ایپسوم </strong></a>.
                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                <i class="fas fa-book-open"></i> لورم ایپسوم
                            </a>
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                <i class="fas fa-pencil-alt"></i> متن ساختگی
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1 -->
        <div class="section-1-container section-container" id="section-1">
            <div class="container">
                <div class="row">
                    <div class="col section-1 section-description wow fadeIn">
                        <h2>خدمات ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-magic"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>نام تجاری</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInDown">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>طراحی وب سایت</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="section-1-box-icon">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>رسانه های اجتماعی</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="section-2-container section-container section-container-gray-bg" id="section-2">
            <div class="container">
                <div class="row">
                    <div class="col section-2 section-description wow fadeIn"></div>
                </div>
                <div class="row">
                    <div class="col-8 section-2-box wow fadeInLeft">
                        <h3>درباره ما</h3>
                        <p class="medium-paragraph">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                        </p>
                        <p>
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                            هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                            درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می
                            طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای
                            علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                        </p>
                    </div>
                    <div class="col-4 section-2-box wow fadeInUp">
                        <img src="{{ asset('images/about-us.jpg') }}" alt="about-us" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section-3-container section-container" id="section-3">
            <div class="container">
                <div class="row">
                    <div class="col section-3 section-description wow fadeIn">
                        <h2>پروژه های ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-paperclip"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>لورم ایپسوم متن ساختگی</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    و با استفاده از طراحان گرافیک است.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-pencil-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>لورم ایپسوم متن ساختگی</h3>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                    و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                                    روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                                    شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fas fa-cloud"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>لورم ایپسوم متن ساختگی با تولید سادگی</h3>
                                <p>
                                    در این صورت می توان امید داشت که تمام و دشواری موجود در
                                    ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد
                                    نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                                    اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 section-3-box wow fadeInLeft">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="section-3-box-icon">
                                    <i class="fab fa-google"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</h3>
                                <p>
                                    چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                    لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                    متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section-4-container section-container section-container-image-bg" id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col section-4 section-description wow fadeInLeftBig">
                        <h2>ما فکر میکنیم که...</h2>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                            مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                            کاربردی می باشد.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
                            <i class="fas fa-envelope"></i> تماس با ما
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="section-5-container section-container" id="section-5">
            <div class="container">
                <div class="row">
                    <div class="col section-5 section-description wow fadeIn">
                        <h2>نمونه کارها</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                </div>
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
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized" href="#" role="button">
                            <i class="fas fa-sync"></i> مشاهده همه
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 6 -->
        <div class="section-6-container section-container section-container-image-bg" id="section-6">
            <div class="container">
                <div class="row">
                    <div class="col section-6 section-description wow fadeIn">
                        <h2>تماس با ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 section-6-box wow fadeInUp">
                        <h3>با ایمیل</h3>
                        <div class="section-6-form">
                            <form role="form" action="assets/contact.php" method="post">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">ایمیل</label>
                                    <input type="text" name="email" placeholder="ایمیل..."
                                        class="contact-email form-control" id="contact-email" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-subject">موضوع</label>
                                    <input type="text" name="subject" placeholder="موضوع..."
                                        class="contact-subject form-control" id="contact-subject" />
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact-message">پیام</label>
                                    <textarea name="message" placeholder="پیام..." class="contact-message form-control" id="contact-message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-customized">
                                    <i class="fas fa-paper-plane"></i> ارسال پیام
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 section-6-box wow fadeInDown">
                        <h3>ما را دنبال کنید</h3>
                        <div class="section-6-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
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
