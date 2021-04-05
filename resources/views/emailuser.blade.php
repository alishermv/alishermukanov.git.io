<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action=" {{ route('addimage') }} " enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="name"> <br><br>
    <input type="text" name="surname" placeholder="surname"> <br><br>
    <input type="text" name="email" placeholder="email"> <br><br>
    <input type="file" name="image"> <br><br>
    <button type="submit" name="submit">Send</button>
    </form>
</body>
</html>
