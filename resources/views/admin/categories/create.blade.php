@extends('admin.layouts.master')

@section('content')
    <div class="row content">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="mb-4">

                <h5 class="font-weight-bold">ایجاد دسته بندی</h5>

                <hr>

                @include('admin.sections.errors')

                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-3">

                            <label for="name">نام</label>
                            <input class="form-control" type="text" name="name" id="name">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">نام انگلیسی</label>
                            <input class="form-control" type="text" name="slug" id="slug">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="is_active">وضعیت</label>
                            <select class="form-control" name="is_active" id="is_active">

                                <option value="1" selected>فعال</option>
                                <option value="0">غیرفعال</option>

                            </select>

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">توضیحات</label>
                            <input class="form-control" type="text" name="description" id="description">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-5">ثبت دسته بندی</button>
                    <a href="{{ route('admin.categories.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

                </form>


            </div>

        </div>

    </div>
@endsection
