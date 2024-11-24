<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @yield('css')
</head>

<body>
<header class="header__inner">
    <h1 class="header__logo">Atte</h1>
    <ul class="header-link">
        <li class="header-link__item">
            <a class="header-link__home" href="/home">ホーム</a>
        </li>
        <li class="header-link__item">
            <form action="/admin" method="get">
            @csrf
                <input class="header-btn__admin" type="submit" value="日付一覧">
            </form>
        </li>
        <li class="header-link__item">
            <form action="/logout" method="post">
            @csrf
                <input class="header-btn__logout" type="submit" value="ログアウト">
            </form>
        </li>
    </ul>
</header>
<div class="content">
    @yield('content')
</div>

<div class="footer">
    <div class="footer__logo">
        Atte,inc.
    </div>
</div>
</body>
</html>
