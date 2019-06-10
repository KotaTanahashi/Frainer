@extends('layouts.body')


@section('meta')

<title>体格や生活に合わせたバルクアップ・増量の食事プログラム作成｜Frainer -あなただけのフリートレーナー-</title>
<meta name="description" content="">
<meta property="og:title" content="体格や生活に合わせたバルクアップ・増量の食事プログラム作成｜Frainer"/>
<meta property="og:description" content="食事量は人それぞれ違います。本来、個人に合わせた食事プログラムは高い料金がかかりますが、Frainerを使えば無料かつ瞬時に作成することができます。"/>
<meta property="og:image" content="/img/round_icon_bulk.png"/>
<meta property="og:url" content="https://frainers.com/bulk"/>
<meta property="og:type" content="article"/>
<meta name="twitter:card" content="summary">
<meta name="robots" content="noindex,nofollow">

@endsection


@section('content')

@if (is_numeric($day))
<div class="row-fluent pt-1 my-5"  style="font-family: 'Noto Sans JP', sans-serif;">
        <div class="col-lg-8 offset-lg-2 jumbotron shadow my-5 px-3 py-5 text-secondary" style="background-color: white; border: solid 0.3px #7CBBE7; line-height: 1.7;">
            <h1 class="display-4 font-weight-bold" style="font-size: 20pt; color: #3aabd2;">バルクアップ向け食事プログラム</h1>
            <hr class="my-4" style="border:solid 0.5px #3aabd2;">

            <div class="mx-3 mt-5 clearfix">
              <p>あなたの入力した数値は合っていますか？</p><ul><li>性別：{{$gender_jp}}</li><li>年齢：{{$age}} 才</li><li>体重：{{$weight}} kg</li><li>身長：{{$height_cm}} cm</li><li>運動強度：{{$volume_jp}}</li></ul>
              <a class="btn btn-sm btn-outline-secondary float-right mt-3" href="#" onclick="window.history.back(); return false;">もう一度やり直す</a>
            </div>

            <div class="card p-4 my-5">
              <h5 class="card-title">目次</h5>
              <div class="card-text wf-sawarabigothic">
                <ul>
                  <li><a class="text-secondary" href="#about">概要　ー必読ー</a></li>
                  <li><a class="text-secondary" href="#total">1日の摂取量</a></li>
                  <li><a class="text-secondary" href="#morning">朝食（8時〜9時）</a></li>
                  <li><a class="text-secondary" href="#lunch">昼食（12時〜13時）</a></li>
                  <li><a class="text-secondary" href="#meal_1">間食１（15時〜16時）</a></li>
                  <li><a class="text-secondary" href="#meal_1">トレーニング（18時〜19時）</a></li>
                  <li><a class="text-secondary" href="#dinner">夕食（20時〜21時）</a></li>
                  <li><a class="text-secondary" href="#meal_2">間食２（23時〜24時）</a></li>
                </ul>
              </div>
            </div>

            <hr id="about" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 style="font-size: 18pt; color: #3aabd2;">概要&nbsp&nbsp&nbsp&nbspー必読ー</h2>
            <p class="mt-5">&nbsp&nbspこのプログラムは、最新の理論を多角的に取り入れ、<strong class="blue_line">過度な体脂肪をつけないバルクアップ</strong>を基準としたもので、以下に注意して実行してください。</p>
            <ul class="my-4">
              <li>量が多い分にはあまり気にせずに食べる</li>
              <li>ストレスがある場合は定期的に好きなものを食べる</li>
              <li>3〜4時間に一回の栄養摂取は守るようにする</li>
            </ul> <br>
            <p>&nbsp&nbsp1日を通し、目標よりも脂質量が少なくなるように設計しています。1日に一回でしたら、プログラムのおかずを<strong class="blue_line">ステーキや唐揚げなどの食品と交換して食べても構いません。</strong></p>
            <p>このプログラムの通り食事する場合は、各食事ごとに脂質量の調整の仕方が書いてあります。</p>
            <br>
            <p>&nbsp&nbsp当プログラムの効果には個人差があります。数週間しても体重がなかなか増えない方や、過度なバルクアップが必要な方は以下の事項を試してみてください。</p>
            <ul class="my-4">
              <li>炭水化物、タンパク質の順で摂取量を増やす</li>
              <li>運動中の糖質 (炭水化物)、プロテイン摂取量を見直す</li>
              <li>一度軽いダイエット・減量を行い再びバルクアップする</li>
            </ul>
            <br>
            <p>&nbsp&nbspまた、プログラムはその時点の体重や運動強度などを元に数値を計算するため、<strong class="blue_line">随時数値を更新する必要があります。</strong></p>

            <hr id="total" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">1日の摂取量</h2>
            <ul class="my-5" style="font-size: 12pt; line-height: 1.8;">
              <li>総摂取カロリー ：<strong>{{$day_bulk}} kcal</strong></li>
              <li>タンパク質（P）：<strong>{{$day_protein}} g</strong></li>
              <li>脂質（F）&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     ：<strong>{{$day_fat}} g</strong></li>
              <li>炭水化物（C）  ：<strong>{{$day_carb}} g</strong></li>
            </ul>
            <!-- <img src="/img/bulk_2.png" alt="1日のPFCバランス" class="img-fluid" style="width: 350px;"> -->

            <hr id="morning"  class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">朝食（8時〜9時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：{{$morning_protein}} g</li>
                <li>脂質（F）：{{$morning_fat}} g</li>
                <li>炭水化物（C）：{{$morning_carb}} g</li>
              </ul>
            </p>
            <table class="table text-secondary my-5">
              <tr>
                <th>メニュー</th>
                <th>量</th>
                <th>P</th>
                <th>F</th>
                <th>C</th>
              </tr>
              <tr>
                <td>{{$morning_dish}}</td>
                <td>{{$morning_salmon['gram']}} g</td>
                <td>{{$morning_salmon['protein']}}</td>
                <td>{{$morning_salmon['fat']}}</td>
                <td>{{$morning_salmon['carb']}}</td>
              </tr>
              <tr>
                <td>白米</td>
                <td>{{$morning_whiterice['gram']}} g</td>
                <td>{{$morning_whiterice['protein']}}</td>
                <td>{{$morning_whiterice['fat']}}</td>
                <td>{{$morning_whiterice['carb']}}</td>
              </tr>
              <tr>
                <td>味噌汁</td>
                <td>一杯</td>
                <td>{{$miso_soup->protein}}</td>
                <td>{{$miso_soup->fat}}</td>
                <td>{{$miso_soup->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>{{$morning_protein}}</td>
                <td>{{$morning_sum_fat}}</td>
                <td>{{$morning_carb}}</td>
              </tr>
            </table>
            <p>&nbsp&nbsp上の食事では、味噌汁に油あげなどを入れるなどして脂質量を調整できます。</p>

            <hr id="lunch" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">昼食（12時〜13時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：{{$lunch_protein}} g</li>
                <li>脂質（F）：{{$lunch_fat}} g</li>
                <li>炭水化物（C）：{{$lunch_carb}} g</li>
              </ul>
            </p>
            <table class="table text-secondary my-5">
              <tr>
                <th>メニュー</th>
                <th>量</th>
                <th>P</th>
                <th>F</th>
                <th>C</th>
              </tr>
              <tr>
                <td>鶏の胸肉</td>
                <td>{{$lunch_chicken['gram']}} g</td>
                <td>{{$lunch_chicken['protein']}}</td>
                <td>{{$lunch_chicken['fat']}}</td>
                <td>{{$lunch_chicken['carb']}}</td>
              </tr>
              <tr>
                <td>白米</td>
                <td>{{$lunch_whiterice['gram']}} g</td>
                <td>{{$lunch_whiterice['protein']}}</td>
                <td>{{$lunch_whiterice['fat']}}</td>
                <td>{{$lunch_whiterice['carb']}}</td>
              </tr>
              <tr>
                <td>野菜炒め<br>(キャベツ、もやし、<br>玉ねぎ、人参)</td>
                <td>200 g</td>
                <td>{{$friedvgt->protein}}</td>
                <td>{{$friedvgt->fat}}</td>
                <td>{{$friedvgt->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>{{$lunch_protein}}</td>
                <td>{{$lunch_sum_fat}}</td>
                <td>{{$lunch_carb}}</td>
              </tr>
            </table>
            <p>&nbsp&nbsp上の食事では野菜炒めにオリーブオイルを加えることで脂質量を調整できます。</p>

            <hr id="meal_1" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">間食１（15時〜16時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：{{$zabas->protein + $salmon_riceball->protein}} g</li>
                <li>脂質（F）：{{$zabas->fat + $salmon_riceball->fat}} g</li>
                <li>炭水化物（C）：{{$zabas->carb + $salmon_riceball->protein}} g</li>
              </ul>
            </p>
            <table class="table text-secondary my-5">
              <tr>
                <th>メニュー</th>
                <th>量</th>
                <th>P</th>
                <th>F</th>
                <th>C</th>
              </tr>
              <tr>
                <td>プロテイン</td>
                <td>一個</td>
                <td>{{$zabas->protein}}</td>
                <td>{{$zabas->fat}}</td>
                <td>{{$zabas->carb}}</td>
              </tr>
              <tr>
                <td>鮭おにぎり</td>
                <td>{{$salmon_riceball_num}}個</td>
                <td>{{$salmon_riceball->protein}}</td>
                <td>{{$salmon_riceball->fat}}</td>
                <td>{{$salmon_riceball->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>{{$zabas->protein + $salmon_riceball->protein}}g</td>
                <td>{{$zabas->fat + $salmon_riceball->fat}}g</td>
                <td>{{$zabas->carb + $salmon_riceball->protein}}g</td>
              </tr>
            </table>
            <p>&nbsp&nbsp間食でのプロテイン摂取は<strong class="blue_line"> "ザバスミルクプロテイン"</strong> をおすすめします。１パックで１５g ものタンパク質を摂ることが出来、美味しく、持ち運びも便利です。</p>
            <p>&nbsp&nbspコンビニで買うことも出来ますが、<strong class="blue_line">ネットでまとめ買いをするとかなりお得</strong>ですのでおすすめです。</p>
            <div class="clearfix">
              <div class="float-right">
                <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hbOPaj" target="_blank">楽天で見る</a>
                <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2YZfXtm" target="_blank">Amazonで見る</a>
              </div>
            </div>

            <hr id="meal_1" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">トレーニング（18時〜19時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：{{$training->protein}} g</li>
                <li>脂質（F）：{{$training->fat}} g</li>
                <li>炭水化物（C）：{{$training->carb}} g</li>
              </ul>
            </p>
            <table class="table text-secondary my-5">
              <tr>
                <th>メニュー</th>
                <th>量</th>
                <th>P</th>
                <th>F</th>
                <th>C</th>
              </tr>
              <tr>
                <td>ホエイプロテイン</td>
                <td>二杯強（{{$training_protein['gram']}} g）</td>
                <td>{{$training_protein['protein']}}</td>
                <td>{{$training_protein['fat']}}</td>
                <td>{{$training_protein['carb']}}</td>
              </tr>
              <tr>
                <td>マルトデキストリン</td>
                <td>{{$training_carb->one_gram}} g</td>
                <td>{{$training_carb->protein}}</td>
                <td>{{$training_carb->fat}}</td>
                <td>{{$training_carb->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td> {{$training->protein}} g</td>
                <td> {{$training->fat}} g</td>
                <td> {{$training->carb}} g</td>
              </tr>
            </table>

            <p>&nbsp&nbspトレーニング中にはECAやBCAAなどをマルトデキストリン（糖質）と共に摂取しましょう。糖質は筋肥大必ずしも必要ではないとも言われますが、バルクアップ・増量を目指す際には十分に取っておくことをおすすめします。</p>
            <p>&nbsp&nbspトレーニング後にはホエイプロテインを摂取します。マルトデキストリンを一気に摂取すると胃もたれする方は、トレーニング後に半分の量をプロテインと一緒に摂取しても良いでしょう。</p>

            <p>プロテインは高品質かつ低価格のゴールドスタンダードをおすすめします。</p>
            <div class="clearfix">
              <div class="float-right">
                <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hbOPaj" target="_blank">楽天で見る</a>
                <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2YZfXtm" target="_blank">Amazonで見る</a>
              </div>
            </div>

            <hr id="dinner" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">夕食（20時〜21時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：{{$dinner_protein}} g</li>
                <li>脂質（F）：{{$dinner_fat}} g</li>
                <li>炭水化物（C）：{{$dinner_carb}} g</li>
              </ul>
            </p>
            <table class="table text-secondary my-5">
              <tr>
                <th>メニュー</th>
                <th>量</th>
                <th>P</th>
                <th>F</th>
                <th>C</th>
              </tr>
              <tr>
                <td>マグロ</td>
                <td>{{$dinner_tuna['gram']}} g</td>
                <td>{{$dinner_tuna['protein']}}</td>
                <td>{{$dinner_tuna['fat']}}</td>
                <td>{{$dinner_tuna['carb']}}</td>
              </tr>
              <tr>
                <td>白米</td>
                <td>{{$dinner_whiterice['gram']}} g</td>
                <td>{{$dinner_whiterice['protein']}}</td>
                <td>{{$dinner_whiterice['fat']}}</td>
                <td>{{$dinner_whiterice['carb']}}</td>
              </tr>
              <tr>
                <td>アボカドサラダ<br>(アボカド、トマト、<br>葉物、ドレッジング)</td>
                <td>155 g</td>
                <td>{{$friedvgt->protein}}</td>
                <td>{{$friedvgt->fat}}</td>
                <td>{{$friedvgt->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>{{$lunch_protein}}</td>
                <td>{{$lunch_sum_fat}}</td>
                <td>{{$lunch_carb}}</td>
              </tr>
            </table>
            <p></p>

            <hr id="meal_2" class="my-5" style="border:solid 0.5px #3aabd2;">

            <h2 class="my-5" style="font-size: 18pt; color: #3aabd2;">間食２（23時〜24時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：24 g</li>
                <li>脂質（F）：0 g</li>
                <li>炭水化物（C）：3 g</li>
              </ul>
            </p>
            <table class="table text-secondary my-5">
              <tr>
                <th>メニュー</th>
                <th>量</th>
                <th>P</th>
                <th>F</th>
                <th>C</th>
              </tr>
              <tr>
                <td><a class="text-secondary" href="https://amzn.to/2Z6d4af" target="_blank">プロテイン</a></td>
                <td>一杯</td>
                <td>{{$gold->protein}}</td>
                <td>{{$gold->fat}}</td>
                <td>{{$gold->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>24</td>
                <td>0</td>
                <td>3</td>
              </tr>
            </table>
            <p>&nbsp&nbsp1日の最後はプロテインを用いてタンパク質を摂取します。</p>
            <p>&nbsp&nbsp寝る前のタンパク質は<strong class="blue_line"> 吸収の遅いカゼインプロテイン </strong>が最適です。</p>
            <p>&nbsp&nbspここでは<strong class="blue_line">ゴールドスタンダードというプロテイン</strong>を想定して計算しています。こちらのプロテインは安さ・品質・美味しさを兼ね備えており、<strong class="blue_line">全ての方におすすめ</strong>です。</p>
            <div class="clearfix">
              <div class="float-right my-3">
                <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hzb8kP" target="_blank">楽天で見る</a>
                <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2Z6d4af" target="_blank">Amazonで見る</a>
              </div>
            </div>

            <!-- <p>&nbsp&nbspまた、「プロテインをもっと色々見て買いたい」という方は、下の記事で最新のプロテイン情報、種類、おすすめなどを紹介していますので是非見てください。</p>
            <div class="clearfix">
              <a class="btn btn btn-outline-secondary m-1 float-right" href="https://a.r10.to/hbOPaj">【2019年最新】おすすめプロテイン<br>価格・成分・品質まとめ</a>
            </div> -->

</div>

@else
<div class="row text-secondary my-5 mx-auto pt-5">
  <div class="card my-5 mx-auto p-5 ">
    <p>はじめに性別・身長・体重・運動強度などを入力してください。</p>
    <a class="btn btn btn-outline-secondary m-1" href="#" onclick="window.history.back(); return false;">数値を入力する</a>
  </div>

</div>

@endif



@endsection
