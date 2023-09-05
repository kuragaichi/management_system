<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                Atte
            </a>
        </div>
        @yield('header')
    </header>

    <main>
        <div class="content__inner">
            @yield('content')
        </div>
    </main>
    <footer>
        <div class="footer__inner">
            <span class="footer__logo">Atte.inc</span>
        </div>
    </footer>
</body>

</html>