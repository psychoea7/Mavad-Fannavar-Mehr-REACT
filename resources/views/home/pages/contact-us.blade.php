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

                            <strong>راه های ارتباطی بازرگانی اسپیدکار</strong>
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

        <div class="container contact-us-wrapper">
            <div class="row">
                <div class="col-md-6 mt-5">
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

                <div class="col-md-6">
                    <div id="map" class="d-flex align-items-stretch rounded" style="position: relative;top: 60px; height: 28rem; margin-bottom: 3rem;">
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 section-6-box wow fadeInDown">
                    <h3 class="text-right">ما را دنبال کنید</h3>
                    <div class="section-6-social">
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fas fa-video"></i></a>
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                    <div class="address-tel">
                        <h4 class="text-right">آدرس شرکت</h4>
                        <p>دفتر مرکزی و انبار : تهران، بزرگراه فتح، خیابان فتح یازدهم، گلبن یازدهم غربی، پلاک 7</p>
                        <h4>تلفن شرکت</h4>
                        <div class="text-right">
                            <span>ثابت :</span> <a href="tel:02166811664">۰۲۱۶۶۸۱۱۶۶۴</a> | <span>همراه :</span> <a
                                href="tel:09125248632">۰۹۱۲۵۲۴۸۶۳۲</a>
                        </div>
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
