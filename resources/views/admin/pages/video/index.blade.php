<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        .table,
        th,
        td {
            border: 1px solid;
        }
    </style>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            {{ session('status') }}
    @endif
    <div id="cover">
        <form method="get" action="">
          <div class="tb">
            <div class="td"><input type="text" placeholder="Search" name="keyword"></div>
            <div class="td" id="s-cover">
              <button type="submit">
                <div id="s-circle">Tìm kiếm</div>
                <span></span>
              </button>
            </div>
          </div>
        </form>
      </div>
    <form action="{{ route('video_show') }}" method="get">
        <table class="table table-striped table-checkall">
            <thead>
                <tr>
                    <th scope="col">Tên </th>
                    <th scope="col">Sourec</th>
                    <th scope="col">Số thứ tự</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tác Vụ</th>

                </tr>
            </thead>
            @foreach ($video as $item)
                <tr>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->source }} </td>
                    <td> {{ $item->order }} </td>
                    <td> {{ $item->status }} </td>
                    <td>
                        <a href="{{ route('video_edit', $item->id) }} "
                            onclick=" return confirm ('Bạn có chắc chắn muốn sửa')"
                            class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip"
                            data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('video_destroy', $item->id ) }}"onclick=" return confirm ('Bạn có chắc chắn muốn xóa ')"
                            class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip"
                            data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>

                </tr>
            @endforeach
         
        </table>
        <br>

        <button type="submit">Thêm mới</button>
    </form>
</body>

</html>
