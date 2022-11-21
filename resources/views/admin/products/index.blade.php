@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست محصولات ({{$products->total()}})</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.products.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد محصول

            </a>


        </div>

        <table class="table table-bordered table-striped text-center">

            <thead>

                <tr>

                    <th>
                        #
                    </th>
                    <th>
                        نام
                    </th>

                    <th>
                        وضعیت
                    </th>

                    <th>
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($products as $key => $product)

                <tr>
                    <th>
                    {{$products->firstItem() + $key}}
                    </th>

                    <th>
                        {{$product->name}}
                    </th>

                    <th>
                        <span class="{{$product->getRawOriginal('is_active') ? 'text-success' : 'text-danger'}}">{{$product->is_active}}</span>
                    </th>

                    <th>
                        <a href="{{route('admin.products.edit' , ['product' => $product->id])}}" class="btn btn-outline-info">ویرایش</a>
                        <a href="{{route('admin.products.show' , ['product' => $product->id])}}" class="btn btn-outline-info">نمایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
    <div>{{$products->links()}}</div>
</div>

@endsection
