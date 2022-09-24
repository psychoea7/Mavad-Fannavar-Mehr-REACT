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
                    <h2>{{$product->name}}</h2>
                    <div class="divider-1 wow fadeInUp"><span class="w-100"></span></div>
                    <ul>
                        @foreach ($productAttr as $value)
                        <li>{{$value->attribute->name}}</li>
                        @endforeach
                    </ul>
                    <p>{{$product->description}}</p>

                </div>
                <div class="col-md-5 col-sm-12 h-100">
                    <div class="owl-carousel owl-theme .owl-dots .owl-dot text-center p-relative">
                        @foreach ($images as $image)
                        <div> <img  src="{{ asset(env('PRODUCT_IMAGE_PATH') . $image->image) }}" alt="HTML5 Logo"/> </div>
                        @endforeach
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
