<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>edit</h2>
    <table >
        <form method="post" action="/admincp/update/{{ $data->id }}">
           <label for="name">
                name:
                <input type="text" name="name" value="{{ $data->name }}">
           </label>
           <br><br>
           <label for="password">
                password:
                <input type="text" name="password" value="{{ $data->password }}">

           </label>
           <br><br>
           <button type="submit" >edit</button>

        </form>    

    </table>
    
</body>
</html>