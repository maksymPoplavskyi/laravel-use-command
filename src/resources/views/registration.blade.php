<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>регистрация</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            margin: 30px;
        }

        #submit {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1 style="margin-left: 30px;">Регистрация</h1>
<form action="{{route('registration')}}" method="post">
    <label for="login">введите имя</label>
    <input type="text" name="login">

    <label for="password">введите пароль</label>
    <input type="password" name="password">

    <label for="email">введите имейл</label>
    <input type="email" name="email">

    <input type="submit" value="регистрация" id="submit">
</form>
</body>
</html>
