@extends('layouts.body')


@section('meta')

<title>BMI・FFMI・基礎代謝量を知る｜Frainer -あなただけのフリートレーナー-</title>
<meta name="description" content="">
<meta property="og:title" content="BMI・FFMI・基礎代謝量を知る｜Frainer"/>
<meta property="og:description" content="自分の現状を知り日々の健康管理の参考にしてください。Frainerでは難しい計算を一瞬で行うことができます。"/>
<meta property="og:image" content="/img/round_icon_cal.png"/>
<meta property="og:url" content="https://frainers.com/cal"/>
<meta property="og:type" content="article"/>
<meta name="twitter:card" content="summary">
<meta name="robots" content="noindex,nofollow">

@endsection


@section('content')

  <div class="row mx-auto mt-5" style="max-width: 470px;">
    <div class="card shadow py-4 px-4 border mx-auto my-5" style="border-width: 3px; color: #666666; ">
      <h3 class="mb-4 pb-2 mr-2 text-center" style="border-bottom: solid 2px;">あなたの測定結果</h3>
      <dl class="my-1" style="font-size: 12pt;">
        <dt style="font-size: 13pt;">BMI：{{$bmi}}</dt>
        <dd class="m-1">{{$bmi_comment}}</dd>
      </dl>
      <div class="col my-2">
        <a class="btn btn-sm btn-outline-secondary float-right m-1" href="#bmi">もっと詳しく</a>
      </div>
      <dl class="my-1" style="font-size: 12pt;">
        <dt style="font-size: 13pt;">FFMI：{{$ffmi}}</dt>
        <dd>&nbsp{{$ffmi_comment}}</dd>
      </dl>
      <div class="col">
        <a class="btn btn-sm btn-outline-secondary float-right m-1 my-3" href="#ffmi">もっと詳しく</a>
      </div>
      <p class="mt-1" style="font-size: 13pt; font-weight: bold;">基礎代謝量：{{$base}} kcal</p>
      <p style="font-size: 13pt; font-weight: bold;">１日の消費カロリー：{{$day}} kcal</p>

        <a class="btn btn-sm btn-outline-secondary m-1 mt-5" href="#" onclick="window.history.back(); return false;">もう一度やり直す</a>
      <div id="arrow" ></div>
    </div>
  </div>

  <div class="row mt-n3">
    <a href="#arrow" class="mx-auto"><img src="/img/arrow_icon_1.png" alt="下矢印" style="width: 50px; height: 50px;"></a>
  </div>

  <div class="row mt-3 mx-auto" >
    <div class="col m-3" style="color: #666666;">
      <div class="text-center">
        <h3 style="color: #666666; font-weight: bold;">１日の栄養摂取基準</h3>
      </div>
    </div>
  </div>

  <div class="row mx-lg-auto my-4" style="max-width: 480px;">
    <div class="col-6" style="color: #666666;">
      <figure class="figure">
        <img class="figure-img img-fluid" src="/img/piechart3.png" alt="三代栄養素のバランス円グラフ" style="width:230px;">
      <!--  <figcaption class="figure-figure-caption text-center mt-1" style="font-size: 8.5pt;">厚生労働省食事摂取基準表より作成</figcaption> -->
      </figure>
    </div>
    <div class="col-6 my-auto pl-4 text-secondary" style="font-weight: bold;">
      <p class="pb-1" style="border-bottom: solid 1px;">タンパク質：{{$nutrition['protein']}}</p>
      <p class="pb-1" style="border-bottom: solid 1px;">炭水化物：{{$nutrition['carb']}}</p>
      <p class="pb-1" style="border-bottom: solid 1px;">脂質：{{$nutrition['fat']}}</p>
    </div>
    <div class="col-12 mx-lg-auto px-lg-5 mt-3 mb-1" style="color: #666666;">
      <p style="font-family:">&nbsp上の指標は、厚生労働省が発表している食事摂取基準表より作成いたしました。そのため、ダイエットをする場合やトレーニング行う人は上の表とは違うアプローチが必要になります。</p><p style="font-family:;">&nbsp<strong>ダイエット向け、バルクアップ向け</strong>（筋肉をつけること）のための配分比率と食事プランをそれぞれ用意してあります。下のボタンから今すぐ行動を始めましょう。</p>
    </div>
    <div class="col-lg-9 offset-lg-2 mt-2 ml-3 ml-sm-5">
      <a class="btn btn btn-outline-secondary m-1" href="/diet">ダイエット向け</a>
      <a class="btn btn btn-outline-secondary m-1" href="/bulk">バルクアップ向け</a>
    </div>
  </div>

  <div class="row mx-lg-3 my-5">
    <div class="row m-3">
      <div class="card-deck" style="color: #666666;">
        <div class="card" style="background-color: #FFDBC9;">
          <h5 class="card-header" style="font-weight : bold;">タンパク質（ {{$nutrition['protein']}}）</h5>
          <div class="card-body">
            <p class="card-text">&nbsp&nbspタンパク質は筋肉を始めとした、体の部品の材料となる栄養素です。<br>&nbsp&nbsp筋肉作りを目的とするアスリートやトレーニーは、体重の1.4倍〜2倍を摂取するとよいとされていますが、タンパク質の過剰摂取による健康リスクは低いため、上限を3倍に設定することも推奨されています。</p>
          </div>
        </div>
        <div class="card" style="background-color: #CBFFD3;">
          <h5 class="card-header" style="font-weight : bold;">炭水化物（ {{$nutrition['carb']}}）</h5>
          <div class="card-body">
            <p class="card-text">&nbsp&nbsp炭水化物は、そこから食物繊維を取り除いた「糖質」が日々の活動のエネルギー源として使われ、その糖質は脳や神経細胞のエネルギー源ともなります。<br>&nbsp&nbsp糖質が不足し始めるとそれを補うために筋肉の分解が進むため、常に十分な量を摂取する必要があります。</p>
          </div>
        </div>
        <div class="card" style="background-color: #C2EEFF;">
          <h5 class="card-header" style="font-weight : bold;">脂質（ {{$nutrition['fat']}}）</h5>
          <div class="card-body">
            <p class="card-text">&nbsp&nbsp脂質は体脂肪として体内に蓄えられる貴重なエネルギー源であり、蓄えられるエネルギー量は糖質よりも多いです。<br>&nbsp&nbsp体内に脂質が増えすぎると肥満や生活習慣病の原因となりますが、同時に生体を構成する重要な栄養素であるため、適量の摂取が必要です。</p>
          </div>
        </div>
      </div>
    </div>
    <div id="bmi"></div>
    <div id="ffmi"></div>
  </div>

  <div class="row mx-lg-3 mt-5">
    <div class="row m-3">
      <div class="card-deck mx-auto">
        <div class="card shadow" style="color: #666666;">
          <h5 class="card-header">BMI（{{$bmi}}）</h5>
          <div class="card-body">
            <p class="card-text">&nbsp&nbspBMI（肥満指数・ボディマス指数）とは、身長と体重の関係から導き出される、肥満を表す指数です。</p>
            <h4 class="mx-2 mt-4 mt-3">BMIの目安</h4>
            <table class="table text-secondary">
              <tr>
                <th>指標</th>
                <th>状態</th>
              </tr>
              <tr>
                <td>16未満</td>
                <td>痩せすぎ</td>
              </tr>
              <tr>
                <td>16〜17</td>
                <td>痩せている</td>
              </tr>
              <tr>
                <td>17〜18.5</td>
                <td>痩せ気味</td>
              </tr>
              <tr>
                <td>18.5〜25</td>
                <td>普通体重</td>
              </tr>
              <tr>
                <td>25〜30</td>
                <td>前肥満</td>
              </tr>
              <tr>
                <td>30〜35</td>
                <td>肥満（１度）</td>
              </tr>
              <tr>
                <td>35〜40</td>
                <td>肥満（２度）</td>
              </tr>
              <tr>
                <td>40以上</td>
                <td>肥満（３度）</td>
              </tr>
            </table>
            <p class="card-text my-4">&nbsp&nbspこれからダイエットを始める人向けの食事プランを用意してあります。下のボタンを押して今すぐダイエットを始めましょう。</p>
            <a class="btn btn-outline-secondary float-right m-1" href="/diet">ダイエット向けの食事プラン</a>
          </div>
        </div>
        <div class="card shadow text-secondary">
          <h5 class="card-header">FFMI（{{$ffmi}}）</h5>
          <div class="card-body">
            <p class="card-text">&nbsp&nbspFFMI（除脂肪体量指数）は別名マッチョ指数などとも呼ばれ、除脂肪体重（体重から脂肪量を引いたもの）と身長の関係から導き出される指数です。</p>
            <h4 class="mx-2 mt-4 mt-3">FFMIの目安</h4>
            <table class="table text-secondary">
              <tr>
                <th>指標</th>
                <th>男性</th>
                <th>女性</th>
              </tr>
              <tr>
                <td>15未満</td>
                <td></td>
                <td>細身</td>
              </tr>
              <tr>
                <td>15〜16</td>
                <td></td>
                <td>標準的<br>太り気味の可能性</td>
              </tr>
              <tr>
                <td>16〜18</td>
                <td>細身</td>
                <td>アスリート体型<br>太り気味の可能性</td>
              </tr>
              <tr>
                <td>18〜20</td>
                <td>標準体型<br>太り気味の可能性</td>
                <td>筋トレマニア</td>
              </tr>
              <tr>
                <td>20〜22</td>
                <td>アスリート体型<br>太り気味の可能性</td>
                <td>かなりのマッチョ</td>
              </tr>
              <tr>
                <td>22〜23.5</td>
                <td>筋トレマニア</td>
                <td>限界を超えています。</td>
              </tr>
              <tr>
                <td>23.5〜25</td>
                <td>かなりのマッチョ</td>
                <td></td>
              </tr>
              <tr>
                <td>25以上</td>
                <td>限界を超えています</td>
                <td></td>
              </tr>
            </table>
            <p class="card-text my-4">&nbsp&nbspこれからバルクアップ（筋肉をつけること）を始める人向けの食事プランを用意してあります。下のボタンを押して今すぐバルクアップを始めましょう。</p>
            <a class="btn btn-outline-secondary float-right m-1" href="/bulk">バルクアップ向けの食事プラン</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--<p><a href="/body">戻る</a></p>-->
@endsection

@section('footer')
copyright 2019 kota.
@endsection
