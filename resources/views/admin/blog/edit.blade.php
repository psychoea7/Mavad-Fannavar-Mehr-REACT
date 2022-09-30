@extends('admin.layouts.master')

@section('content')
    <form class="col-md-5 content" action="{{ route('admin.blogs.update', ['blog' => $blog->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleFormControlInput1">عنوان</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="عنوان"
                value="{{ $blog->title }}">
        </div>
        <div class="form-group">
            <label for="image">انتخاب تصویر</label>
            <input class="form-control" type="file" id="image" name="image" placeholder="{{ $blog->image }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">متن بلاگ</label>
            <textarea class="form-control" id="myeditorinstance" name="text">{!! $blog->text !!}</textarea>
        </div>
        <button type="submit" class="btn btn-success form-group">ویرایش بلاگ</button>
    </form>
@endsection

@section('js')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
        directionality: "rtl",
        image_title: true,
        convert_urls: false,
        automatic_uploads: true,
        images_upload_url: '/uploadImage',
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function() {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                };
            };
            input.click();
        }
    });
</script>
@endsection

