@extends('home.layouts.master')

@section('content')
    <div class="content">
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-bars"></i> 
        </a>

        @include('home.sections.language')

        <div class="to-top rounded-top-btn">
            <a href="#" role="button">
                <i class="fas fa-chevron-circle-up"></i>
            </a>
          </div>

        <img class="img-fluid header-logo" src="{{ asset('images/logo-dark-1.png') }}" alt="">





        <div class="container contact-us-wrapper pt-5 pb-5">
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








        @include('home.sections.footer')
    </div>
@endsection
