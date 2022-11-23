@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست درخواست ها ({{$collabs->total()}})</h5>


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
                        تلفن
                    </th>

                    <th>
                        فایل
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($collabs as $key => $collab)

                <tr>
                    <th>
                    {{$collabs->firstItem() + $key}}
                    </th>

                    <th>
                        {{$collab->name}}
                    </th>

                    <th>
                        {{$collab->phone}}
                    </th>

                    <th>
                        <a href="{{URL::to(env('Collab_FILE_PATH') . $collab->file)}}" class="btn btn-outline-success">دریافت فایل رزومه</a>
                    </th>


                    <th>
                        <a href="{{route('admin.collabs.show' , ['collab' => $collab->id])}}" class="btn btn-outline-info">نمایش توضیحات</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
    <div>{{$collabs->links()}}</div>
</div>

@endsection
