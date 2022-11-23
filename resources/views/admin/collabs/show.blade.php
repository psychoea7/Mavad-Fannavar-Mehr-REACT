@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="mb-4">

            <h5 class="font-weight-bold">ارسال کننده : {{$collab->name}}</h5>

            <hr>


               <div class="row">

                <div class="form-group col-md-3">

                    <label for="name">نام</label>
                    <input class="form-control" type="text" value="{{$collab->name}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">شماره</label>
                    <input class="form-control" type="text" value="{{$collab->phone}}" disabled>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">فایل رزومه</label>
                        <a href="{{URL::to(env('Collab_FILE_PATH') . $collab->file)}}" class="btn btn-outline-success">دریافت فایل رزومه</a>


                </div>

                </div>

                <div class="form-group col-md-3">

                    <label for="name">توضیحات:</label> <br>
                    <textarea disabled>{{$collab->description}}</textarea>

                </div>
               </div>

                <a href="{{route('admin.collabs.index')}}" class="btn mt-5 mr-3 btn-dark"> بازگشت </a>



        </div>

    </div>

</div>


@endsection
