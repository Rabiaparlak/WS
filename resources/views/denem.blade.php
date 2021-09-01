<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>

    <meta charset="utf-8">
    <title></title>

</head>

<body>

<form action="{{route('deneme.gonder')}}" method="post">
    @csrf
    <label for="">Adı soyadı</label>
    <input type="text" name="name">
    <br>
    <label for="">email</label>
    <input type="email" name="mail">
    <br>
    <label for="">sifre</label>
    <input type="password" name="pw1">
    <br>
    <button type="submit">Gonder</button>

</form>

</body>

</html>
