@extends('layouts.body')


@section('meta')

<title>Frainer｜本格的な食事プログラムを提供するあなただけのフリートレーナー</title>
<meta name="description" content="">
<meta property="og:title" content="日々のフィットネスライフを応援するあなただけのフリートレーナー"/>
<meta property="og:description" content="Frainerは現状分析、知識習得、ダイエット・バルクアップ食事メニューなどのサービスを無料で提供しています。「パーソナルトレーナーにお願いするほど余裕がない」という方はまずFrainerを試してみてください。"/>
<meta property="og:image" content="/img/home_icon_1.png"/>
<meta property="og:url" content="https://frainers.com/body"/>
<meta property="og:type" content="article"/>
<meta name="twitter:card" content="summary">

@endsection


@section('content')

<div class="row my-5 pt-5 pb-4 " style="font-family: 'Noto Sans JP', sans-serif; color: #666666; background-color: #fff;">

    <div class="col pt-4">
        <img src="/img/home_icon_1.png" class="img-fluid rounded mx-auto d-block" style="max-width: 220px;">
    </div>

    <div class="col-12 text-center mt-5 mb-3" style="color: #666;">
        <h1 class="font-weight-bold" style="font-family: 'Orbitron', sans-serif;">Frainer</h1>
        <p class="font-weight-bold" style="font-family: 'Orbitron', sans-serif;">あなただけのフリートレーナー</p>
    </div>
    <div class="col-sm-12 text-center" style="color: #666;">
        <p style="font-family: 'Orbitron', sans-serif;">Frainer では、入力した情報を元に<br>日々のフィットネスライフに必要な情報を提供します。</p>
        <!-- </div>
      <div class="col-md-2 offset-md-3 mt-5">
        <div class="text-secondary">
          <a href="#"><img src="/img/round_icon_cal.png" alt="計算機" style="width: 100px; border-radius: 50%;" class="shadow"></a>
          <p class="p-1">現状を知る</p>
        </div>
      </div> -->
        <div class="row mx-auto mt-5 mb-5 alpha" style="max-width: 600px;">
            <div class="col-4 mx-auto">
                <a href="/cal"><img src="/img/round_icon_cal.png" alt="計算機" style="width: 80px; border-radius: 50%; font-family: 'Orbitron', sans-serif;" class="shadow">
                    <p class="pt-2">現状を知る</p>
                </a>
            </div>
            <div class="col-4">
                <a href="/diet"><img src="/img/round_icon_diet.png" alt="体重計" style="width: 80px; border-radius: 50%; font-family: 'Orbitron', sans-serif;" class="shadow">
                    <p class="pt-2">ダイエット</p>
                </a>
            </div>
            <div class="col-4">
                <a href="/bulk"><img src="/img/round_icon_bulk.png" alt="ダンベル" style="width: 80px; border-radius: 50%; font-family: 'Orbitron', sans-serif;" class="shadow">
                    <p class="pt-2">バルクアップ</p>
                </a>
            </div>
            <div id="why" />
        </div>


    </div>

    <div class="row">
        <div class="col-12 text-center my-3 pt-3">
            <h2><a style="" href="#why">ー Why Frainer ー</a></h2>
            <p class="mt-5" style="line-height: 2.3;">マッチョになりたいからなんでもいいから食べてる<br>ダイエットするからとりあえずご飯を減らしている<br>・・・<br>何か新しいことを始める時は間違いを犯しがちです<br>そんな人はパーソナルトレーナーに見てもらうべきでしょう<br>しかしそんなにお金がないのも現実です<br>そんな時のためのフリートレーナー、Frainer<br>・・・<br>まずは数週間、やってみましょう
            </p>
        </div>
    </div>
    <div id="content" />

</div>
<div class="row text-secondary mb-5 px-5 py-3 alpha">
    <div class="col-12 text-center my-5 py-3">
        <h2><a href="#content">ー Content ー</a></h2>
    </div>
    <div class="col-lg-4 col-md-6 text-center mb-5 p-1 px-3" style="line-height: 1.8;">
        <div class="text-secondary">
            <a class="" href="/cal" style="width: 150px;">
                <img class="d-block mx-auto mb-3" src="/img/cal_icon_1.png" alt="計算機アイコン" style="width: 100px;">
                <h3 class="m-4">体の指標計算</h3>
                <p class="px-3">BMI・FFMI・基礎代謝量などの数値を計算し、必要な知識を手に入れます。</p>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 text-center mb-5 p-1 px-3" style="line-height: 1.8;">
        <div class="text-secondary">
            <a class="" href="/diet" style="width: 150px;">
                <img class="d-block mx-auto mb-4" src="/img/diet_icon_2.png" alt="体重計アイコン" style="width: 90px;">
                <h3 class="my-4">ダイエット・減量<br>食事プログラム</h3>
                <p class="mt-4 px-3">ダイエット・減量向けの食事プログラムを作成します。</p>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 text-center mb-5 p-1 px-3" style="line-height: 1.8;">
        <div class="text-secondary">
            <a class="" href="/bulk" style="width: 150px;">
                <img class="d-block mx-auto mb-4" src="/img/bulk_icon_1.png" alt="体重計アイコン" style="width: 90px;">
                <h3 class="m-3">バルクアップ・増量<br>食事プログラム</h3>
                <p class="px-3 mt-4">バルクアップ・増量向けの食事プログラムを作成します。</p>
            </a>
        </div>
    </div>

</div>


@endsection
