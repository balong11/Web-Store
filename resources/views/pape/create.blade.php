<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create paper</h2>
    <form action="/pape/store" method="post">
        @csrf
        <label for="name">
            name:
            <input type="text" name="name">
        </label><br><br>
        <label for="danh muc">
            danh muc:
            <input type="text" name="danhmuc">
        </label><br><br>
        <label for="images">
            images:
            <input type="file" name="images">
        </label>
        <br><br>
        <label for="tom tat">
            tom tat:
            <textarea rows="10" name="tomtat" style="resize:none"></textarea>
        </label>
        <br><br>
        <label for="noi dung">
            noi dung:
            <textarea rows="10" name="noidung" style="resize:none"></textarea>
        </label>
        <br><br>
        <label for="tinh trang">
            tinh trang:
            <input type="text" name="tinhtrang">
        </label>
        <br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
