@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-bars"></i>
        </a>

        @include('home.sections.language')

        <img class="img-fluid header-logo" src="{{ asset('images/logo-dark-1.png') }}" alt="">

        <div class="container contact-us-wrapper pt-5 pb-5">
            <div class="row pt-5">

                <div class="col-md-6">
                    <h3 class="text-right">ارتباط با ما</h3>
                    <div class="divider-1 wow fadeInUp text-right"><span></span></div>
                    <div class="address-tel">
                        <h4 class="text-right">آدرس</h4>
                        <p>تهران، بزرگراه فتح، خیابان فتح یازدهم، گلبن یازدهم غربی، پلاک 7</p>
                        <h4 class="text-right">کد پستی</h4>
                        <p>۴۱۶۵۴۹۸۷۷</p>
                        <h4>تلفن</h4>
                        <div class="text-right">
                             <a href="tel:02166811664">۰۲۱۶۶۸۱۱۶۶۴</a>
                        </div>
                        <h4 class="mt-4">ایمیل</h4>
                        <div class="text-right">
                            <a href="mailto:info@speedkar.ir">speedkar@gmail.com</a>
                       </div>
                    </div>
                    <div class="section-6-social">
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><img class="aparat-icon" src="{{ asset('images/icons8-aparat-40.png') }}" alt=""></a>
                        <a href="#"><i class="fas fa-phone"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>

                <div class="col-md-6">
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

                
            </div>

            <div class="row py-3">
                <div class="col-md-12 section-6-box wow fadeInDown">
                    <div id="map" class="d-flex align-items-stretch rounded" style="position: relative;top: 0; height: 25rem; ">
                    </div>
                    
                </div>
            </div>
        </div>








        @include('home.sections.footer')
    </div>
@endsection
