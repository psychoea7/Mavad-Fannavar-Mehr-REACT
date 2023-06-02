@extends('admin.layouts.master')

@section('content')

<div class="row">

    <div class="col-xl-12 col-md-12 mb-4 p-md-5">

        <div class="d-flex justify-content-between mb-4">

            <h5 class="font-weight-bold">لیست کاربران</h5>

            <a class="btn btn-sm btn-outline-primary" href="{{route('admin.users.create')}}">

                <li class="fa fa-plus"></li>

                ایجاد ویژگی

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
                        عملیات
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach ($users as $key => $user)

                <tr>
                    <th>
                    {{$user->firstItem() + $key}}
                    </th>

                    <th>
                        {{$user->name}}
                    </th>


                    <th>
                        <a href="{{route('admin.users.edit' , ['user' => $user->id])}}" class="btn btn-outline-info">ویرایش</a>
                    </th>
                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
    {{-- <div>{{$users->links()}}</div> --}}
</div>

@endsection
