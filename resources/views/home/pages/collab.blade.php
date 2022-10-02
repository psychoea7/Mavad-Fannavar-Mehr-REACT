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

                            <strong>همکاری با بازرگانی اسپیدکار</strong>
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
                <div class="col-md-12 mt-5">
                    <div class="section-6-form collab-form">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">نام و نام خانوادگی</label>
                                <input type="text" name="name" placeholder="نام و نام خانوادگی"
                                    class="contact-subject form-control" />

                                <label class="sr-only" for="contact-subject">سن</label>
                                <input type="number" name="age" placeholder="سن"
                                    class="contact-subject form-control" />

                                <label class="sr-only" for="contact-email">شماره تماس</label>
                                <input type="text" name="phone" placeholder="شماره تماس"
                                    class="contact-subject form-control" />
                            </div>

                            <div class="form-group my-5">
                                <label class="sr-only" for="contact-email">ایمیل</label>
                                <input type="file" name="email" placeholder="ایمیل..."
                                    class="contact-email form-control" id="contact-email" />
                            </div>

                            
                            <div class="form-group">
                                <label class="sr-only" for="contact-message">پیام</label>
                                <textarea name="message" placeholder="پیام..." class="contact-message form-control" id="contact-message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-customized">
                                ارسال رزومه <i class="fas fa-paper-plane"></i>
                            </button>
                        </form>
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
