<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <a href="/cate/create">create new</a> <hr>
        <table  width="100%" style="border-collapse: collapse" border="1";>
            <tr>
                <th>id</th>
                <th>ten danh muc</th>
                <th>thu tu</th>
                <th>quan ly</th>
            </tr>
            @foreach ($categoris as $categori)
            <tr>
                <td>{{ $categori->id }}</td>
                <td>{{ $categori->name }}</td>
                <td>{{ $categori->slug }}</td>
                <td>
                    <a href="/cate/destroy/{{ $categori->id }}">xoa</a> | 
                    <a href="/cate/edit/{{ $categori->id }}">sua</a>
                </td>
            </tr>
                
            @endforeach
        </table>
        
</body>
</html>
