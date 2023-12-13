<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <a href="/pape/create">create new</a> <hr>
        <table  width="100%" style="border-collapse: collapse" border="1";>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>danh muc</th>
                <th>images</th>
                <th>tom tat</th>
                <th>noi dung</th>
                <th>tinh trang</th>
                <th>quan ly</th>
            </tr>
            @foreach ($papers as $paper)
            <tr>
                <td>{{ $paper->id }}</td>
                <td>{{ $paper->name }}</td>
                <td>{{ $paper->danhmuc }}</td>
                <td>
                    <img data-src="{{$paper->getImageUrl('paper') }}" alt="image" class="img-fluid h-100 lazy">
                </td>
                <td>{{ $paper->tomtat }}</td>
                <td>{{ $paper->noidung }}</td>
                <td>{{ $paper->tinhtrang }}</td>
                <td>
                    <a href="/pape/destroy/{{ $paper->id }}">xoa</a> | 
                    <a href="/pape/edit/{{ $paper->id }}">sua</a>
                </td>
            </tr>
                
            @endforeach
        </table>
        
</body>
</html>
