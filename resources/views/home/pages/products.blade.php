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

                            <strong>محصولات بازرگانی اسپیدکار</strong>
                        </h1>
                        <div class="description wow fadeInLeft">
                            <p>
                                واردات و عرضه آلیاژ ها صنعتی با پشتوانه بیش از ۱۰ سال تجربه فعالیت بازرگانی و خدمات مهندسی
                                سطح

                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                خدمات <i class="fas fa-briefcase"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row mb-3">
                <div class="col-md-8 col-sm-12">
                    <div class="filters-group">
                        <label for="filters-search-input" class="filter-label">جستجو</label>
                        <input class="textfield filter__search js-shuffle-search" type="search"
                            id="filters-search-input" />
                    </div>
                </div>
                <div class="col-md-4 col-sm-12  filters-group-wrap">
                    <fieldset class="filters-group">
                        <legend class="filter-label">مرتب سازی</legend>
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
                        <p class="filter-label">فیلتر</p>
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
                        $productAttr = $product->attributes()->with('attribute')->get();
                    @endphp

                    <div class="col-md-4 picture-item" data-groups='["{{$product->category_id}}"]' data-date-created="2015-10-20"
                        data-title="Central Park">
                        <div class="skill-card">
                            <header class="skill-card__header"><img class="skill-card__icon"
                                    src="{{ asset(env('PRODUCT_IMAGE_PATH') . $product->primary_image) }}" alt="HTML5 Logo" /></header>
                            <section class="skill-card__body">
                                <h2 class="skill-card__title">{{$product->name}}</h2><span class="skill-card__duration">{{$product->description}}</span>
                                <ul class="skill-card__knowledge">
                                    @foreach ($productAttr as $value)
                                    <li>{{$value->attribute->name}}</li>
                                    @endforeach
                                </ul>
                            </section>
                        </div>
                    </div>
                @endforeach



                <div class="col-1@sm col-1@xs my-sizer-element"></div>
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
