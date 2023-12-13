<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>edit paper</h2>
    <table  width="100%" style="border-collapse: collapse" border="1";>
        <form method="post" action="/pape/update/{{ $data->id }}" enctype="multipart/form-data">
            @csrf
            @foreach ($data as $papers)
 
            <tr>
                <td>tên sản phẩm</td>
                <td><input type="text" value="{{ $data->name }}" name="name" ></td>
            </tr>
            <tr>
                <td>danh muc</td>
                <td><input type="text" value="{{ $data->danhmuc }}" name="danhmuc" ></td>
            </tr>
           
            <tr>
                <td>hình ảnh</td>
                <td><input type="file" name="images" >
                      <img src="/images/{{ $data->images }}" width="150px">
                </td>
            </tr>
            <tr>
                <td>tóm tắt</td>
                <td><textarea row="" style="resize: none" name="tomtat" value="{{ $data->tomtat }}"  ></textarea></td>
            </tr>
            <tr>
                <td>nội dung</td>
                <td><textarea row="10" style="resize: none" name="noidung" value="{{ $data->noidung }}"  ></textarea></td>
            </tr>
        
            <tr>
                <td>tình trạng</td>
                <td><input type="text" value="{{ $data->tinhtrang }}" name="tinhtrang" ></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="suasanpham" value="sửa bai "/></td>
            </tr> 

            @endforeach
        </form>
    </table>
</body>
</html>