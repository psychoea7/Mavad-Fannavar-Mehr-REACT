@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ایجاد برند</h5>

            <hr>

            @include('admin.sections.errors')

            <form action="{{route('admin.attributes.update' , ['attribute' => $attribute->id])}}" method="POST">
                @csrf
                @method('put')

               <div class="form-row content">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" value="{{$attribute->name}}" type="text" name="name" id="name">

                </div>

                <div class="form-group col-md-3">

                    <label for="name">نام انگلیسی</label>
                    <input class="form-control" value="{{$attribute->slug}}" type="text" name="slug" id="slug">

                </div>

               </div>

               <center>
                <button type="submit" class="btn btn-outline-primary mt-5">ویرایش</button>
            </center>
                <a href="{{route('admin.attributes.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>

            </form>


        </div>

    </div>

</div>


@endsection
