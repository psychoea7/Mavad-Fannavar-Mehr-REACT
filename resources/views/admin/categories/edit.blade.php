@extends('admin.layouts.master')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="mb-4">

                <h5 class="font-weight-bold">ویرایش دسته بندی</h5>

                <hr>

                @include('admin.sections.errors')

                <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="form-row content">

                        <div class="form-group col-md-3">

                            <label for="name">نام</label>
                            <input class="form-control" value="{{ $category->name }}" type="text" name="name"
                                id="name">

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">نام انگلیسی</label>
                            <input class="form-control" value="{{ $category->slug }}" type="text" name="slug"
                                id="slug">

                        </div>


                        <div class="form-group col-md-3">

                            <label for="is_active">وضعیت</label>
                            <select class="form-control" name="is_active" id="is_active">

                                <option value="1" {{$category->is_active ? 'selected' : ''}}>فعال</option>
                                <option value="0">غیرفعال</option>

                            </select>

                        </div>

                        <div class="form-group col-md-3">

                            <label for="name">توضیحات</label>
                            <input class="form-control" type="text" value="{{$category->description}}" name="description" id="description">

                        </div>

                    </div>

                    <center>
                        <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
                    </center>
                    <a href="{{ route('admin.categories.index') }}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

                </form>


            </div>

        </div>

    </div>
@endsection
