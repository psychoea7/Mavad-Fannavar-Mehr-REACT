@extends('admin.layouts.master')

@section('content')
    <div class="row content">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="mb-4">

                <h5 class="font-weight-bold">ایجاد محصول</h5>

                <hr>

                @include('admin.sections.errors')

                <form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">

                        <div class="form-group col-md-3">

                            <label for="name">نام</label>
                            <input class="form-control" type="text" name="name" id="name"
                                value="{{ $product->name }}">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">نام انگلیسی</label>
                            <input class="form-control" type="text" name="slug" id="slug"
                                value="{{ $product->slug }}">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="categories">انتخاب دسته بندی</label>
                            <select class="form-control" name="categories" id="categories">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}
                                    </option>
                                @endforeach

                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            @php
                                $getAttr = $product->attributes->pluck('id')->toArray();
                            @endphp
                            <select id="attributeSelect" name="attribute_ids[]" multiple class="my-select">
                                @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}"
                                        {{ in_array($attribute->id, $getAttr) ? 'selected' : '' }}>{{ $attribute->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">

                            <label for="is_active">وضعیت</label>
                            <select class="form-control" name="is_active" id="is_active">

                                <option value="1" {{ $product->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                                </option>
                                <option value="0" {{ $product->getRawOriginal('is_active') ? 'selected' : '' }}>
                                    غیرفعال</option>

                            </select>

                        </div>
                    </div>

                    <div class="form-group col-md-8">

                        <label for="primary-image">انتخاب تصویر اصلی</label>

                        <div class="custom-file">

                            <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                            <label for="primay_image" class="custom-file-label">انتخاب فایل</label>

                        </div>

                    </div>

                    <div class="form-group col-md-8">

                        <label for="images">انتخاب تصاویر</label>

                        <div class="custom-file">

                            <input type="file" name="images[]" multiple class="custom-file-input" id="images">
                            <label for="images" class="custom-file-label">انتخاب فایل</label>

                        </div>
                    </div>

                    <div class="form-group col-md-12">

                        <label for="name">توضیحات</label>
                        <textarea class="form-control" type="text" name="description" id="myeditorinstance">{{ $product->description }}</textarea>

                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-5">ویرایش محصول</button>
                    <a href="{{ route('admin.attributes.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

                </form>


            </div>

        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            directionality: "rtl",
        });

        $(document).ready(function() {
            $('#attributeSelect').selectpicker({
                'title': 'انتخاب ویژگی'
            });

            $('#primary_image').change(function() {
                var getname = $(this).val();
                $(this).next('.custom-file-label').html(getname);
            })

            $('#images').change(function() {
                var getname = $(this).val();
                $(this).next('.custom-file-label').html(getname);
            })
        });
    </script>
@endsection
