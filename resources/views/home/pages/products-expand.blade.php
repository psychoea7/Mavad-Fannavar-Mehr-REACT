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

        <div class="container my-4 py-5 expanded-product pt-5 pb-5">
            <div class="row pt-5">
                <div class="col-md-7 col-sm-12">
                    <h2>{{$product->name}}</h2>
                    <div class="divider-1 wow fadeInUp"><span class="w-100"></span></div>
                    <ul>
                        @foreach ($product->attributes as $value)
                        <li>{{$value->name}}</li>
                        @endforeach
                    </ul>
                    <p>{{$product->description}}</p>

                </div>
                <div class="col-md-5 col-sm-12 h-100">
                    <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center p-relative">
                        <div> <img  src="{{ asset(env('PRODUCT_IMAGE_PATH') . $product->primary_image) }}" alt="HTML5 Logo"/> </div>
                        @foreach ($images as $image)
                        <div> <img  src="{{ asset(env('PRODUCT_IMAGE_PATH') . $image->image) }}" alt="HTML5 Logo"/> </div>
                        @endforeach
                      </div>


                </div>
            </div>
        </div>















        @include('home.sections.footer')

    </div>
@endsection
