<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        a {
            text-decoration: none;
        }
    </style>

    <form action="{{ route('video_create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="title">Tiêu Đề</label><br>
        <input type="text" id="title" name="title"><br><br>
        @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
        <div class="form-group">
            <div> Thêm video</div>
            <input type="file" name="file">
           
        </div><br>
        <label for="order">Số thứ tự</label><br>
        <input type="number" min="0" id="order" name="order"><br><br>
        <label for="Chọn Danh Mục">Chọn Danh Mục</label><br>
        <select name="category" id="Chọn Danh Mục">
            <option value="">Chọn</option>
            @foreach ($category as $item)
                <option value="{{ $item->id }}">
                    {{ $item->name }}
                </option>
            @endforeach
        </select> <br><br>
        <button type="submit">Thêm Mới</button> <br><br>

        <a href="{{route('video_index')}}">Danh sách video</a>
    </form>
</body>

</html>
