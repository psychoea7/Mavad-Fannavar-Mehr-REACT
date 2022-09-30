@extends('admin.layouts.master')

@section('content')
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-md-5">

            <div class="d-flex justify-content-between mb-4">

                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.blogs.create') }}">

                    <li class="fa fa-plus"></li>

                    ایجاد بلاگ

                </a>


            </div>

            <div class="form-row content">
                @foreach ($blogs as $blog)
                    <div class="card form-group col-md-5">
                        <img class="card-img-top" src="{{ url(env('BLOG_IMAGE_PATH') . $blog->image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            {{-- <p class="card-text">{{ $blog->text }}</p> --}}
                            <a href="{{ route('admin.blogs.show', ['blog' => $blog->id]) }}"
                                class="btn btn-outline-info">نمایش بلاگ</a>
                            <div>

                                <a href="{{ route('admin.blogs.edit', ['blog' => $blog->id]) }}"
                                    class="btn btn-outline-success">ویرایش بلاگ</a>

                            </div>

                            <div>
                                <form action="{{ route('admin.blogs.destroy', ['blog' => $blog->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger">حذف بلاگ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
