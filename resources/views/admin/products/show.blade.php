@extends('admin.layouts.master')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="mb-4">

                <h5 class="font-weight-bold">برند : {{ $product->name }}</h5>

                <hr>


                <div class="row">

                    <div class="form-group col-md-3">

                        <label for="name">نام</label>
                        <input class="form-control" type="text" value="{{ $product->name }}" disabled>

                    </div>


                    <div class="form-group col-md-3">

                        <label for="name">وضعیت</label>
                        <input class="form-control" type="text" value="{{ $product->is_active }}" disabled>

                    </div>

                    <div class="form-group col-md-3">

                        <label for="name">ویژگی های محصول</label>
                        @foreach ($product->attributes as $attribute)
                            <input class="form-control" type="text" value="{{ $attribute->name }}" disabled>
                        @endforeach

                    </div>

                </div>
                <div class="form-group col-md-3">

                    <label for="name">تصویر اصلی محصول</label>

                    <img style="width: 200px;height: 100px;" src="{{ asset(env('PRODUCT_IMAGE_PATH') . $product->primary_image) }}" alt="">
                </div>

                @foreach ($images as $image)
                <div class="form-group col-md-3">
                <img style="width: 200px;height: 100px" src="{{ asset(env('PRODUCT_IMAGE_PATH') . $image->image) }}" alt="">
                </div>
                @endforeach
            </div>

            <a href="{{ route('admin.products.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

    </div>
@endsection
