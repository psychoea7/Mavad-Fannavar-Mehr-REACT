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

                            <strong>Speedkar | شرکت بازرگانی اسپیدکار</strong>
                        </h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                واردات و عرضه آلیاژ ها صنعتی با پشتوانه بیش از 10 سال تجربه فعالیت بازرگانی و خدمات مهندسی
                                سطح
                                {{-- <a href=""><strong></strong></a>. --}}
                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                خدمات <i class="fas fa-briefcase"></i>
                            </a>
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                محصولات <i class="fas fa-tags"></i>
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
                        <h2 class="text-center">خدمات ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="text-center">خدمات خرید و تامین کالا</h3>
                                <p class="text-center">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 section-1-box wow fadeInDown">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-money-check-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="text-center">خدمات ارزی بازرگانی</h3>
                                <p class="text-center">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="text-center">خدمات حمل بین المللی</h3>
                                <p class="text-center">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 section-1-box wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-1-box-icon">
                                    <i class="fas fa-truck-loading"></i>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="text-center">خدمات گمرکی</h3>
                                <p class="text-center">
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
                    <div class="col-md-8 col-sm-12 section-2-box wow fadeInLeft">
                        <h2>درباره ما</h2>
                        <div class="divider-1 wow fadeInUp mb-3"><span></span></div>
                        <p class="medium-paragraph">
                            شرکت بازرگانی اسپیدکار، با در اختیار داشتن گروه بازرگانی و مهندسی در زمینه تامین، واردات و عرضه
                            آلیاژ ها صنعتی با پشتوانه بیش از 10 سال تجربه فعالیت بازرگانی و خدمات مهندسی سطح، آماده ارایه
                            تجهیزات، مواد اولیه و آلیاژ های صنعتی تخصصی ضد سایش و ضد خوردگی در زمینه پوشش های حرارتی،
                            جوشکاری و پوشش دهی مورد نیاز صنایع کشور می باشد.
                            هدف این شرکت کمک به انتخاب علمی و دسترسی به آلیاژ های تخصصی و مهندسی مطابق با استاندارد های روز
                            دنیا در داخل کشور می باشد.
                        </p>
                        <p class="medium-paragraph">
                            شرکت بازرگانی اسپیدکار با نیازسنجی و شناسایی زمینه‌های مساعد و قابل اجرا جهت فعالیت در بخش‌ها و
                            حوزه‌های مختلف صنعتی و تولیدی ایران، قدم در عرصه صنعت فلزات و آلیاژ های نوین در این کشور گذاشته
                            و با بکارگیری نیروهایی جوان، متخصص و کارامد همراه با تجاربی مناسب در بسیاری از زمینه‌های اجرایی؛
                            تلاش دارد نقشی موثر و بسزا در بهبود، بروزرسانی و توسعه صنعت نوآور و به روز درکشور ایفا نماید.
                        </p>
                        <p class="medium-paragraph">واحد بازرگانی اسپیدکار با توجه به داشتن ارتباطات گستره با متخصصین رشته
                            متالورژی و مکانیک در خارج
                            از کشور و اخذ نمایندگی های فروش و خدمات پس از فروش از چندین برند مطرح اروپایی و آسیایی و همکاری
                            گسترده با تامین کنندگان معتبر خارجی در بخش مواد اولیه و ماشین الات صنعت پوشش دهی، امکان تأمین
                            طیف وسیعی از قطعات، تجهیزات و ماشین‌آلات مورد نیاز در پروژه‌های صنعتی شرکت‌ها و صنایع کشور و
                            ارائه خدمات پس از فروش مناسب آنها را در کوتاه‌ترین زمان ممکن و تحت استانداردهای بین‌المللی روز
                            دنیا را دارا می‌باشد.</p>
                        <h3>اهم قابلیت‌ها و خدمات قابل ارائه این شرکت:</h3>
                        <ul>
                            <li>نمایندگی چندین برند مطرح اروپایی در زمینه‌ مواد مصرفی و تجهیزات تخصصی پوشش دهی و جوشکاری
                            </li>
                            <li>تامین مواد مصرفی و تجهیزات پوشش های حرارتی Thermal spray</li>
                            <li>تامین مواد مصرفی و تجهیزات تخصصی جوشکاری و روکش دهی Hard facing and cladding</li>
                            <li>تامین پودر های مصرفی فرایند پرینت فلزی پودر و لیزرکلدینگ 3Dprinting and laser Cladding</li>
                            <li>تامین مواد مصرفی و تجهیزات روکش دهی پلاسمایی (PTA welding)</li>
                            <li>خدمات مشاوره در انتخاب مواد و متریال های مهندسی و تخصصی در زمینه روکش دهی سخت</li>
                            <li>واردات انواع قطعات، تجهیزات و ماشین‌آلات اعم از مکانیکی، الکتریکی و تجهیزات خاص صنایع مختلف
                                از جمله حفاری، فولادسازی و نفت و گاز</li>
                            <li>مشاوره و بازدید از خطوط صنایع مختلف با استفاده از کارگروه‌های تخصصی صنایع مربوطه و ارائه
                                راهکارهای نوین جهت بروزرسانی و افزایش راندمان و بهره‌ وری خطوط تولید</li>
                            <li>ارائه خدمات پس از فروش محصولات و مشاوره در زمینه تعمیرات و نگهداری ادواری آنها</li>
                            <li>ارائه مشاوره و راهکارهای تخصصی در زمینه انواع بازرسی‌های فنی لازم جهتواردات تجهیزات مختلف
                            </li>
                            <li>تدوین، تهیه و ارائه اسناد و مستندات فنی و اسناد و تاییدیه‌های بازرسی تجهیزات تامین شده مطابق
                                با استانداردهای روز دنیا</li>
                            <li>درج لوگوهای شرکت های خارجی به صورت نواری در پایین صفحه درباره ما و گذاشتن لینک سایت هر کدام
                                بر روی عکس</li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 section-2-box wow fadeInUp">
                        <img class="h-100" src="{{ asset('images/about-us.jpg') }}" alt="about-us" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section-3-container section-container" id="section-3">
            <div class="container">
                <div class="row">
                    <div class="col section-3 section-description wow fadeIn">
                        <h2 class="text-center">آمار ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                    </div>
                </div>

                <!-- Numbers Section ----------------------------------------------->
                <div class="row mt-5" id="numbers">
                    <div class="col-md-4 col-sm-12">
                        <article class="service-number">
                            <span class="number" data-value="130">۰</span>
                            <p>مشتریان</p>
                        </article>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <article class="done-projects-number">
                            <span class="number" data-value="560">۰</span>
                            <p>محصولات</p>
                        </article>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <article class="current-projects-number">
                            <span class="number" data-value="34">۰</span>
                            <p>پروژه ها</p>
                        </article>
                    </div>
                </div>

                {{-- <div class="row">
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
                </div> --}}
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section-4-container section-container section-container-image-bg" id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col section-4 section-description wow fadeInLeftBig">
                        <h2> کلامی از ما...</h2>
                        <p class="text-center">
                            اسپیدکار یا سپیدکار در متون فارسی شخصی را گویند که ظروف مس را سفید کند و او را قلعی گر و سفیدگر
                            نیز گویند.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col section-bottom-button wow fadeInUp">
                        <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
                             تماس با ما <i class="fas fa-envelope"></i>
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
                        <h2 class="text-center">وبلاگ</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p class="text-center">
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
                             مشاهده همه <i class="fas fa-sync"></i>
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
                        <h2 class="text-center">تماس با ما</h2>
                        <div class="divider-1 wow fadeInUp"><span></span></div>
                        <p class="text-center">
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
                                     ارسال پیام <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5  section-6-box wow fadeInDown">
                        <h3 class="text-center">راه های ارتباطی</h3>
                        <div class="section-6-social">
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-telegram"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-video"></i></a>
                            <a href="#"><i class="fas fa-phone"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
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
