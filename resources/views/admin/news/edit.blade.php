@extends('admin.layouts.master')

@section('content')

<form class="col-md-5 content" action="{{route('admin.blogs.update' , ['blog' => $blog->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="exampleFormControlInput1">عنوان</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="عنوان" value="{{$blog->title}}">
    </div>
    <div class="form-group">
      <label for="image">انتخاب تصویر</label>
      <input class="form-control" type="file" id="image" name="image" placeholder="{{$blog->image}}">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">متن بلاگ</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3">{{$blog->text}}</textarea>
    </div>
    <button type="submit" class="btn btn-success form-group">ویرایش بلاگ</button>
  </form>

@endsection
