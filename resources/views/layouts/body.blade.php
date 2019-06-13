<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141917428-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141917428-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @yield('meta')

    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- cssの呼び出し -->
    <link href="css/body.css" rel="stylesheet" type="text/css">

    <!-- Cart.js CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


    <link href="https://fonts.googleapis.com/css?family=Kosugi&display=swap&subset=japanese" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <!-- font-family: 'Orbitron', sans-serif; -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.ico">

    <style media="screen">
        body {
            font-size: 10.5pt;

        }
        p, ul li {
          line-height: 2.2;
        }
    </style>



</head>

<body>



    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg fixed-top navbar-light py-3" style="background-color: white; border-bottom: solid 0.5px #dbdbdb;">
                    <a class="navbar-brand ml-3" href="/body" style="color: ; font-size:23pt; font-family: 'Orbitron', sans-serif;">Frainer</a>
                    <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarText">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="/body">ホーム <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/cal">体の指標計算 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/diet">ダイエット・減量 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="/bulk">バルクアップ・増量 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://fitnesshub.jp/" target="_blank">FITNESS HUB</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light px-3">
        @yield('content')
    </div>


    <div class="container-fluid">
      <div class="row">
        <div class="col text-center">
          <p><a class="btn btn btn-outline-secondary m-1" href="https://twitter.com/intent/tweet?url=https://frainers.com" target="_blank" style="border-radius: 10px;"><i class="fab fa-twitter"></i>&nbsp&nbspTweet</a>
            <a class="btn btn btn-outline-secondary m-1" href="https://www.facebook.com/sharer.php?src=bm&u=https://frainers.com" target="_blank" style="border-radius: 10px;"><i class="fab fa-facebook-f"></i>&nbsp&nbspShare</a>
            <a class="btn btn btn-outline-secondary m-1" href="https://social-plugins.line.me/lineit/share?url=https://frainers.com" target="_blank" style="border-radius: 10px;"><i class="fab fa-line"></i>&nbsp&nbspLINE</a>
        </div>
      </div>
        <div class="row bg-light">
            <div class="col pt-2 mb-n2">
                <div class="text-center">
                    <p><a class="mx-2" style="font-size: 18pt;" href="https://twitter.com/fitnesshubjp"><i class="fab fa-twitter"></i></a>
                        <a class="mx-2" style="font-size: 18pt;" href="https://www.instagram.com/fitnesshub.jp/"><i class="fab fa-instagram"></i></a></p>
                </div>
            </div>
        </div>
        <div class="row " style="background-color: #181818;">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-4 ml-5 px-5 pt-5 text-light">
                <h1 style="font-size:12pt;"><a class="text-light" href="/body">Frainer</a></h1>
                <ul>
                    <li><a class="text-light" href="/body">ホーム</a></li>
                    <li><a class="text-light" href="/cal">体の指標計算</a></li>
                    <li><a class="text-light" href="/diet">ダイエットプログラム</a></li>
                    <li><a class="text-light" href="/bulk">バルクアッププログラム</a></li>
                </ul>
            </div>
            <div class="col-lg-4 ml-5 px-5 pt-5 text-light">
                <h1 style="font-size:12pt;"><a class="text-light" href="https://fitnesshub.jp/" target="_blank">FITNESS HUB</a></h1>
                <ul>
                    <li><a class="text-light" href="https://fitnesshub.jp/" target="_blank">ホーム</a></li>
                    <li><a class="text-light" href="https://fitnesshub.jp/site-concept/" target="_blank">サイトコンセプト</a></li>
                    <li><a class="text-light" href="https://fitnesshub.jp/category/category/" target="_blank">カテゴリー一覧</a></li>
                    <li><a class="text-light" href="https://fitnesshub.jp/category/writer_profile/" target="_blank">ライタープロフィール</a></li>
                    <li><a class="text-light" href="https://fitnesshub.jp/contact/"  target="_blank">お問い合わせ</a></li>
                </ul>
            </div>
            <div class="col-12 text-secondary mt-4 text-center pb-5">
                <p class="text-center mx-5" style="font-size: 8pt;">© Copyright 2019 &nbsp&nbsp<a class="text-light" href="https://fitnesshub.jp/">FITNESS HUB｜ 筋トレ・ダイエット・食事に関する正しい情報を提供する.</a></p>
            </div>
        </div>
        <p id="page-top"><a href="#wrap"><i class="fas fa-chevron-up"></i></a></p>
    </div>



    <!--bootstrap -->
    <!--jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- jsファイルの呼び出し -->
    <script type="text/javascript" src="js/body.js"></script>
    <!--popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!--plugin -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Cart.js CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/00d19d22fb.js"></script>

</body>

</html>
