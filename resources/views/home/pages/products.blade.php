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

        <img class="img-fluid header-logo" src="{{ asset('images/7.png') }}" alt="">

        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-4 col-sm-12">
                    <div class="filters-group">
                        <p class="filter-label">جستجو</p>
                        <input class="textfield filter__search js-shuffle-search" type="search"
                            id="filters-search-input" />
                    </div>
                </div>

                {{-- vijegi mahsoolat az inja --}}

                {{-- <div class="col-md-9 col-sm-12 filters-group-wrap">
                    <div class="filters-group">
                        <p class="filter-label">ویژگی محصول</p>
                        <div class="btn-group filter-options">

                            @foreach ($categories as $category)
                                <button class="btn btn--primary"
                                    data-group="{{ $category->id }}">{{ $category->name }}</button>
                            @endforeach
                        </div>
                    </div>

                </div> --}}
                {{-- ta inja --}}





                {{-- <div class="col-md-9 col-sm-12  filters-group-wrap">
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
                </div> --}}
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
                            <div>|</div>

                            @foreach ($attributes as $attribute)
                                <button class="btn btn--primary attribute-filter"
                                    data-group="attr{{ $attribute->id }}">{{ $attribute->name }}</button>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container mt-5 py-5">
            <div id="grid" class="row my-shuffle-container">


                @foreach ($products as $product)
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
                                    <h2 class="skill-card__title">{{ $product->name }}</h2>
                                    <p class="skill-card__duration">{{ $product->description }}</p>
                                    <ul class="skill-card__knowledge">
                                        @foreach ($product->attributes as $value)
                                            <li>{{ $value->name }}</li>
                                        @endforeach
                                        <a href="{{ route('showProduct', ['product' => $product->id]) }}">نمایش محصول</a>
                                    </ul>
                                </section>
                            </div>
                        </div>

                        {{-- sotoone vijegi mahsool --}}
                    @endif
                @endforeach

                @foreach ($attributes as $attribute)
                    @foreach ($attribute->products as $value)
                        <div id="product{{ $value->name }}"
                            onclick="location.href='{{ route('showProduct', ['product' => $value->id]) }}'"
                            class="col-md-3 picture-item" data-groups='["attr{{ $attribute->id }}"]'
                            data-date-created="2015-10-20" data-title="Central Park">
                            <div id="product" class="skill-card">
                                <header class="skill-card__header"><img class="skill-card__icon"
                                        src="{{ asset(env('PRODUCT_IMAGE_PATH') . $value->primary_image) }}"
                                        alt="HTML5 Logo" /></header>
                                <section class="skill-card__body">
                                    <h2 class="skill-card__title">{{ $value->name }}</h2>
                                    <p class="skill-card__duration">{{ $value->description }}</p>
                                    <ul class="skill-card__knowledge">
                                        @foreach ($value->attributes as $item)
                                            <li>{{ $item->name }}</li>
                                        @endforeach
                                        <a href="{{ route('showProduct', ['product' => $value->id]) }}">نمایش محصول</a>
                                    </ul>
                                </section>
                            </div>
                        </div>
                    @endforeach
                @endforeach



                <div class="col-1@sm col-1@xs my-sizer-element"></div>
            </div>
        </div>


        @include('home.sections.footer')
    </div>
@endsection

@section('js')
    <script>
        class Demo {
            constructor(element) {
                this.element = element;
                this.shuffle = new Shuffle(element, {
                    itemSelector: '.picture-item',
                    sizer: element.querySelector('.my-sizer-element'),
                });

                // Log events.
                this.addShuffleEventListeners();
                this._activeFilters = [];
                this.addFilterButtons();
                this.addSorting();
                this.addSearchFilter();
            }

            /**
             * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
             * for them like you normally would (with jQuery for example).
             */
            addShuffleEventListeners() {
                this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
                    console.log('layout. data:', data);
                });
                this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
                    console.log('removed. data:', data);
                });
            }

            addFilterButtons() {
                const options = document.querySelector('.filter-options');
                if (!options) {
                    return;
                }

                const filterButtons = Array.from(options.children);
                const onClick = this._handleFilterClick.bind(this);
                filterButtons.forEach((button) => {
                    button.addEventListener('click', onClick, false);
                });
            }

            _handleFilterClick(evt) {
                const btn = evt.currentTarget;
                const isActive = btn.classList.contains('active');
                const btnGroup = btn.getAttribute('data-group');

                this._removeActiveClassFromChildren(btn.parentNode);

                let filterGroup;
                if (isActive) {
                    btn.classList.remove('active');
                    filterGroup = Shuffle.ALL_ITEMS;
                } else {
                    btn.classList.add('active');
                    filterGroup = btnGroup;
                }

                this.shuffle.filter(filterGroup);
            }

            _removeActiveClassFromChildren(parent) {
                const {
                    children
                } = parent;
                for (let i = children.length - 1; i >= 0; i--) {
                    children[i].classList.remove('active');
                }
            }

            addSorting() {
                const buttonGroup = document.querySelector('.sort-options');
                if (!buttonGroup) {
                    return;
                }
                buttonGroup.addEventListener('change', this._handleSortChange.bind(this));
            }

            _handleSortChange(evt) {
                // Add and remove `active` class from buttons.
                const buttons = Array.from(evt.currentTarget.children);
                buttons.forEach((button) => {
                    if (button.querySelector('input').value === evt.target.value) {
                        button.classList.add('active');
                    } else {
                        button.classList.remove('active');
                    }
                });

                // Create the sort options to give to Shuffle.
                const {
                    value
                } = evt.target;
                let options = {};

                function sortByDate(element) {
                    return element.getAttribute('data-created');
                }

                function sortByTitle(element) {
                    return element.getAttribute('data-title').toLowerCase();
                }

                if (value === 'date-created') {
                    options = {
                        reverse: true,
                        by: sortByDate,
                    };
                } else if (value === 'title') {
                    options = {
                        by: sortByTitle,
                    };
                }
                this.shuffle.sort(options);
            }

            // Advanced filtering
            addSearchFilter() {
                const searchInput = document.querySelector('.js-shuffle-search');
                if (!searchInput) {
                    return;
                }
                searchInput.addEventListener('keyup', this._handleSearchKeyup.bind(this));
            }

            /**
             * Filter the shuffle instance by items with a title that matches the search input.
             * @param {Event} evt Event object.
             */
            _handleSearchKeyup(evt) {
                const searchText = evt.target.value.toLowerCase();
                this.shuffle.filter((element, shuffle) => {
                    // If there is a current filter applied, ignore elements that don't match it.
                    if (shuffle.group !== Shuffle.ALL_ITEMS) {
                        // Get the item's groups.
                        const groups = JSON.parse(element.getAttribute('data-groups'));
                        const isElementInCurrentGroup = groups.indexOf(shuffle.group) !== -1;
                        // Only search elements in the current group
                        if (!isElementInCurrentGroup) {
                            return false;
                        }
                    }
                    const titleElement = element.querySelector('.skill-card__title');
                    const titleText = titleElement.textContent.toLowerCase().trim();
                    return titleText.indexOf(searchText) !== -1;
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            window.demo = new Demo(document.getElementById('grid'));
        });
    </script>
@endsection
