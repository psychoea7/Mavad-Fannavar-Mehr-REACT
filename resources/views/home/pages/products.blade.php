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

        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-3 col-sm-12">
                    <div class="filters-group">
                        <p class="filter-label">جستجو</p>
                        <input class="textfield filter__search js-shuffle-search" type="search"
                            id="filters-search-input" />
                    </div>
                </div>
                <div class="col-md-9 col-sm-12  filters-group-wrap">
                    <fieldset class="filters-group">
                        <p class="filter-label">ویژگی محصول</p>
                        <div class="btn-group sort-options">
                            <label class="btn active">
                                <input type="radio" name="sort-value" value="dom" checked /> پیش فرض
                            </label>
                            <label class="btn">
                                <input type="radio" name="sort-value" value="title" /> عنوان
                            </label>
                            <label class="btn">
                                <input type="radio" name="sort-value" value="date-created" /> تاریخ ایجاد
                            </label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 filters-group-wrap">
                    <div class="filters-group">
                        <p class="filter-label">دسته بندی محصول</p>
                        <div class="btn-group filter-options">
                            @foreach ($categories as $category)
                                <button class="btn btn--primary"
                                    data-group="{{ $category->id }}">{{ $category->name }}</button>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container mt-5 py-5">
            <div id="grid" class="row my-shuffle-container">


                @foreach ($products as $product)
                    @php
                        $productAttr = $product
                            ->attributes()
                            ->with('attribute')
                            ->get();
                    @endphp

                    @if ($product->category->getRawOriginal('is_active') == 1)
                        <div id="product{{ $product->id }}"
                            onclick="location.href='{{ route('showProduct', ['product' => $product->id]) }}'"
                            class="col-md-3 picture-item" data-groups='["{{ $product->category_id }}"]'
                            data-date-created="2015-10-20" data-title="Central Park">
                            <div id="product" class="skill-card">
                                <header class="skill-card__header"><img class="skill-card__icon"
                                        src="{{ asset(env('PRODUCT_IMAGE_PATH') . $product->primary_image) }}"
                                        alt="HTML5 Logo" /></header>
                                <section class="skill-card__body">
                                    <h2 class="skill-card__title">{{ $product->name }}</h2><p
                                        class="skill-card__duration">{{ $product->description }}</p>
                                    <ul class="skill-card__knowledge">
                                        @foreach ($productAttr as $value)
                                            <li>{{ $value->attribute->name }}</li>
                                        @endforeach
                                        <a href="{{ route('showProduct', ['product' => $product->id]) }}">نمایش محصول</a>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    @endif
                @endforeach



                <div class="col-1@sm col-1@xs my-sizer-element"></div>
            </div>
        </div>


        @include('home.sections.footer')
    </div>
@endsection
