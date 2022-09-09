@extends('admin.layouts.master')

@section('content')

<form class="col-md-5 content" action="{{route('admin.blogs.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">عنوان</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="عنوان">
    </div>
    <div class="form-group">
      <label for="image">انتخاب تصویر</label>
      <input class="form-control" type="file" id="image" name="image">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">متن بلاگ</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success form-group">ثبت بلاگ</button>
  </form>

@endsection
