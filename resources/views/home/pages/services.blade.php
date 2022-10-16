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

                            <strong>خدمات بازرگانی اسپیدکار</strong>
                        </h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                واردات و عرضه آلیاژ ها صنعتی با پشتوانه بیش از ۱۰ سال تجربه فعالیت بازرگانی و خدمات مهندسی
                                سطح

                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                                محصولات <i class="fas fa-tags"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container services-container">
            {{-- <div class="row mt-4">
                <div class="col-md-12 quick-service-icons text-left wow fadeIn">
                    <span class="d-block  mb-2">دسترسی سریع</span>
                    
                    <a class="btn  btn-primary btn-customized" href="#serviceFirst" role="button">
                        <i class="fas fa-shopping-bag"></i> 
                    </a>
                    <a class="btn  btn-primary btn-customized" href="#serviceSecond" role="button">
                        <i class="fas fa-money-check-alt"></i> 
                    </a>
                    <a class="btn  btn-primary btn-customized" href="#serviceThird" role="button">
                        <i class="fas fa-shipping-fast"></i>
                    </a>
                    <a class="btn  btn-primary btn-customized" href="#serviceFour" role="button">
                        <i class="fas fa-truck-loading"></i> 
                    </a>
                    
                </div>
            </div> --}}
            
            <div id="serviceFirst" class="row py-5">
                
                <div class="col-md-12 service-box wow fadeIn">
                    <i class="fas fa-shopping-bag"></i>
                    <h3>خدمات خرید و تامین کالا</h3>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>واحد بازرگانی شرکت اسپیدکار با تکیه بر تجربه تامین کالاهای تخصصی خود و شرکای تجاری در ایتالیا، بلژیک
                        ، ترکیه و چین و داشتن دفتر تجاری در شهر های ازمیر ترکیه و شنزن چین، توانایی ارایه خدمات مشاوره و
                        تامین خرید کلیه کالاهای صنعتی مجاز را دارد. تهیه منابع خارج از کشور ممکن است یک فرآیند طاقت فرسا و
                        همراه با ریسک باشد و خدمات قابل ارایه شرکت اسپیدکار در کلیه مراحل منبع یابی و خرید و مذاکره کالا به
                        شرح زیر می باشد : </p>
                    <ul>
                        <li>کمک به انتخاب محصول یا کالای وارداتی</li>
                        <li>شناسایی کشورهای تامین کننده و محدوده تامین کنندگان</li>
                        <li>یافتن تامین کننده‌ و تولید کننده</li>
                        <li>کمک به انتخاب تامین کننده مناسب طی مذاکره حضوری و مجازی توسط شرکا و دفاتر شرکت اسپیدکار</li>
                        <li>اعتبار سنجی تامین کننده کالا</li>
                        <li>درخواست نمونه برای محصول</li>
                        <li>خدمات خرید کالا های تحت تحریم و ارایه راه حل های به روز جهت خرید</li>
                        <li>نهایی کردن قرارداد و خرید کالا</li>
                    </ul>
                    <p>شرکت اسپیدکار همراه با تیم مجرب خود توانسته با تکیه بر سوابق، غلبه بر محدودیت‌ها، تسلط بر قوانین بین
                        الملل، توانایی خود را جهت به حداقل رساندن ریسک و کوتاه کردن زمان در تهیه منابع و خرید خارجی حفظ کند.
                    </p>
                    <p>سابقه فعالیت شرکت اسپیدکار در زمینه منبع یابی و خرید و تامین خارجی:</p>
                    <ul>
                        <li>واردات و مشاوره در خرید مواد اولیه فلزی و آلیاژی از قبیل ورق، لوله ، تسمه و سیم جوش و پودر…</li>
                        <li>واردات محصولات تخصصی روشنایی ، نورپردازی ، خطوط تولید، لوازم مصرفی ( ای سی ، برد ، ال ای دی ….)
                            مشاوره در واردات CKD</li>
                        <li>واردات محصولات تخصصی الکترونیک و مخابرات از آلمان و چین با داشتن شریک متخصص و اخذ مشاوره جهت
                            منبع یابی سریع</li>
                        <li>واردات ابزار آلات و قطعات صنعتی کارگاهی و ابزار ماشین کاری و سنگ زنی، تکنولوژی های لیزر و پلاسما
                        </li>
                        <li>واردات تجهیزات ابزار دقیق ، کنترل و الکترونیک صنعتی در صنایع نیروگاهی و نفت گاز</li>
                        <li>واردات محصولات سرامیک و نسوز، المنت های صنعتی</li>
                        <li>واردات تجهیزات جوشکاری و برش دهی مخصوص و تحت سفارش</li>
                        <li>واردات محصولات شیمیایی و پلیمری مورد مصرف در صنایع پالایشگاهی</li>
                    </ul>

                </div>
            </div>

            <div id="serviceSecond" class="row py-5">
                <div class="col-md-12 service-box wow fadeIn">
                    <i class="fas fa-money-check-alt"></i>
                    <h3>خدمات ارزی بازرگانی</h3>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>شرکت اسپیدکار در خصوص شرایط جدید صادرات و واردات از کانال بانکی داخلی و خارجی با توجه به قوانین جدید
                        مالی دنیا ، از طریق بهره‌مندی از توانایی‌های صرافی مجموعه خود در امارات و چین و همچنین زیر ساخت‌های
                        ارتباطی با صادرکنندگان کشور جهت مبادلات ارزی به مشتریان خود خدمات ارزی بازرگانی ارائه می‌نماید.</p>
                    <ul>
                        <li>انجام حواله ارزی از طریق روابط کارگزاری</li>
                        <li>دریافت حواله‌های ارزی رایج از تمامی کشورها به مقصد امارات، ترکیه، هنک کنگ، چین و…</li>
                        <li>ترانسفر مالی صادرکنندگان</li>
                    </ul>
                    <p>واحد ارزی و بانکی شرکت کلیه فعالیت‌های خود را در راستای مقررات سامانه نیما انجام می‌دهد.</p>

                </div>
            </div>

            <div id="serviceThird" class="row py-5">
                <div class="col-md-12 service-box wow fadeIn">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>خدمات حمل بین المللی</h3>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>شرکت اسپیدکار در بخش حمل و نقل و ارسال کالا به طرق مختلف در حوزه واردات و صادرات، با کمک نمایندگان
                        خارجی کشورهای آسیایی، اروپایی، خاورمیانه و امکان ارایه پیشنهاد قیمت رقابتی و قابل اطمینان جهت حمل
                        کالا از کلیه کشورها می باشد.</p>
                    <p>ارائه خدمات شرکت اسپیدکار در بخش حمل خارجی:</p>
                    <ul>
                        <li>انجام امور حمل و نقل بین‌المللی دریایی، زمینی و هوایی در زمینه صادرات و واردات</li>
                        <li>پیگیری و نظارت محموله مشتریان</li>
                        <li>خدمات import-re-export در اروپا و آسیا</li>
                        <li>حمل کالاهای برند و تحریمی</li>
                        <li>کراس استافینگ</li>
                        <li>حمل کالاهای شیمیایی و کالاهای خطرناک</li>
                        <li>تعرفه مناسب جهت دموراژ</li>
                        <li>انجام امور اکسپرس کالا</li>
                        <li>سوییچ بارنامه</li>
                    </ul>
                    <p>با وجود تحریم در شرایط کنونی، شرکت اسپیدکار توانایی همکاری با تمام لاین‌های خارجی به صورت مستقیم و
                        غیرمستقیم را از طریق دفاتر خود دارد.</p>

                </div>
            </div>

            <div id="serviceFour" class="row py-5">
                <div class="col-md-12 service-box wow fadeIn">
                    <i class="fas fa-truck-loading"></i>
                    <h3>خدمات گمرکی</h3>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>شرکت اسپیدکار با داشتن کارت بازرگانی و مجوز حق العمل کاری گمرک امکان ارایه کلیه خدمات امورگمرکی را در
                        حوزه واردات و صادرات کالا به مشتریان ارائه می‌دهد. امور بازرگانی واردات در شرکت اسپیدکار بدون واسطه
                        انجام می‌شود و به صورت تخصصی متمرکز بر خدمات ترخیص کالاهای صنعتی می باشد.</p>
                    <p>شرکت اسپیدکار توانایی صادرات کالاها را با وجود محدودیت‌ها از جمله تحریم‌ها را داشته و امکان ارایه راه
                        حل های به روز جهت ارسال کالا به خریداران خارجی دارد.</p>
                    <p>برخی از خدمات گمرکی شامل:</p>
                    <ul>
                        <li>خدمات واردات کالا</li>
                        <li>اخذ مجوزهای ورود</li>
                        <li>خدمات بانکی مرتبط با واردات</li>
                        <li>بررسی و تهیه اسناد حمل</li>
                        <li>اخذ مجوزهای ترخیص کالا</li>
                        <li>اظهار کالا و ترخیص کالا از گمرکات سراسر کشور</li>
                        <li>خدمات صادرات کالا</li>
                        <li>اظهار گمرکی صادرات</li>
                        <li>انجام تشریفات گمرکی صادرات</li>
                        <li>امور نظارت بر صادرات و بارگیری کالا</li>
                    </ul>


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
