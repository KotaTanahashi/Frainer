@extends('layouts.body')


@section('meta')

<title>体格や生活に合わせたダイエット・減量の食事プログラム作成｜Frainer -あなただけのフリートレーナー-</title>
<meta name="description" content="">
<meta property="og:title" content="体格や生活に合わせたダイエット・減量の食事プログラム作成｜Frainer"/>
<meta property="og:description" content="食事量は人それぞれ違います。本来、個人に合わせた食事プログラムは高い料金がかかりますが、Frainerを使えば無料かつ瞬時に作成することができます。"/>
<meta property="og:image" content="/img/round_icon_diet.png"/>
<meta property="og:url" content="https://frainers.com/diet"/>
<meta property="og:type" content="article"/>
<meta name="twitter:card" content="summary">
<meta name="robots" content="noindex,nofollow">

@endsection


@section('content')

@if (is_numeric($day))
<div class="row-fluent pt-1 my-5"  style="font-family: 'Noto Sans JP', sans-serif;">
        <div class="col-lg-8 offset-lg-2 jumbotron shadow my-5 px-3 py-5 text-secondary" style="background-color: white; border: solid 0.3px #7CBBE7; line-height: 1.7;">
            <h1 class="display-4 font-weight-bold" style="font-size: 20pt; color: #EC8179;">ダイエット向け食事プログラム</h1>
            <hr class="my-4" style="border:solid 0.5px #e26e66;">

            <div class="mx-3 mt-5 clearfix">
              <p>あなたの入力した数値は合っていますか？</p><ul><li>性別：{{$gender_jp}}</li><li>年齢：{{$age}} 才</li><li>体重：{{$weight}} kg</li><li>身長：{{$height_cm}} cm</li><li>運動強度：{{$volume_jp}}</li></ul>
              <a class="btn btn-sm btn-outline-secondary float-right mt-3" href="#" onclick="window.history.back(); return false;">もう一度やり直す</a>
            </div>

            <div class="card p-4 my-5">
              <h5 class="card-title">目次</h5>
              <div class="card-text wf-sawarabigothic">
                <ul>
                  <li><a class="text-secondary" href="#about">概要  -必読-</a></li>
                  <li><a class="text-secondary" href="#total">1日の摂取量</a></li>
                  <li><a class="text-secondary" href="#morning">朝食（8時〜9時）</a></li>
                  <li><a class="text-secondary" href="#lunch">昼食（12時〜13時）</a></li>
                  <li><a class="text-secondary" href="#meal_1">間食１（15時〜16時）</a></li>
                  <li><a class="text-secondary" href="#dinner">夕食（18時〜19時）</a></li>
                  <li><a class="text-secondary" href="#meal_2">間食２（23時〜24時）</a></li>
                </ul>
              </div>
            </div>

            <hr id="about" class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 style="font-size: 18pt; color: #EC8179;">概要&nbsp&nbsp&nbsp&nbspー必読ー</h2>
            <p class="mt-5">&nbsp&nbspこのプログラムは、最新の理論を多角的に取り入れ、<strong class="pink_line">健康的でリバウンドをしない体作り</strong>を目指すもので、以下の点を特に重視しています。</p>
            <ul class="my-4">
              <li>過度な食事制限はせず、筋肉量を減らさない<br><span style="font-size: 11pt;">＊脂質量不足の糖質制限は筋量低下をもたらします</span></li>
              <li>糖質を優先的にカットするが、PFCバランスは保つ<br><span style="font-size: 11pt;">＊PFC：タンパク質・脂質・炭水化物</span></li>
              <li>食事回数を増やし、血糖値の上昇を抑える</li>
            </ul>
            <p>&nbsp&nbspまた、プログラムはその時点の体重や運動強度などを元に数値を計算するため、<strong class="pink_line">随時数値を更新する必要があります。</strong></p><br>
            <p>&nbsp&nbsp当プログラムは体質などにより、結果に個人差があります。１ヶ月ほどしても全く体重が変わらない、実感がわかない場合は以下のことを試すことをおすすめします。</p>
            <ul class="my-4">
              <li>炭水化物の量を優先的に減らしていく</li>
              <li>有酸素運動（早朝・運動後）などを取り入れる</li>
              <li>特殊なダイエットプログラムを組む</li>
            </ul>

            <hr id="total" class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 class="my-5" style="font-size: 18pt; color: #EC8179;">1日の摂取量</h2>
            <ul class="my-5" style="font-size: 12pt; line-height: 1.8;">
              <li>総摂取カロリー ：<strong>{{$day_diet}} kcal</strong></li>
              <li>タンパク質（P）：<strong>{{$day_protein}} g</strong></li>
              <li>脂質（F）&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     ：<strong>{{$day_fat}} g</strong></li>
              <li>炭水化物（C）  ：<strong>{{$day_carb}} g</strong></li>
            </ul>
            <p>&nbsp&nbsp＊トレーニングを行う場合は、上記にプラスしてトレーニング後にタンパク質を摂取し、<strong class="pink_line">摂取した量と同じ分の炭水化物を減らします。</strong></p>
            <p>&nbsp&nbsp例えば、トレーニング前後で30ｇのプロテインを摂取する場合、朝・昼・夕食から27gずつ合計81gの白米を減らしてください。</p>
            <img src="/img/diet_2.png" alt="1日のPFCバランス" class="img-fluid" style="width: 350px;">

            <hr id="morning"  class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 class="my-5" style="font-size: 18pt; color: #EC8179;">朝食（8時〜9時）</h2>
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
                <td>オイコス</td>
                <td>一個</td>
                <td>{{$oikos->protein}}</td>
                <td>{{$oikos->fat}}</td>
                <td>{{$oikos->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>{{$morning_protein}}</td>
                <td>{{$morning_sum_fat}}</td>
                <td>{{$morning_carb}}</td>
              </tr>
            </table>
            <p>&nbsp&nbsp上の食事では、脂質量が目標より少なくなっています。外食などをすると、どうしても脂分の多い食事をとってしまうので余裕を持っておいても良いでしょう。<br>&nbsp&nbsp気になる方は<strong class="pink_line"> 味噌汁に油揚げを少し加える</strong>ことをおすすめします。</p>
            <!-- <p>&nbsp&nbsp鮭の塩焼きは「アジの開き」や「焼きだら」などと代用できます。</p> -->
            <p><strong class="pink_line">&nbsp&nbsp"オイコス" は手軽にタンパク質を取ることのできる、最適なギリシャヨーグルト</strong>です。これからダイエットを始める人は用意しておくことを強くおすすめします。</p>
            <div class="clearfix">
              <div class="float-right">
                <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hfsoSA" target="_blank">楽天で見る</a>
                <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2YZKRSm" target="_blank">Amazonで見る</a>
              </div>
            </div>
            <!-- <div class="media">
              <a href="https://www.amazon.co.jp/H-B%E3%83%A9%E3%82%A4%E3%83%95%E3%82%B5%E3%82%A4%E3%82%A8%E3%83%B3%E3%82%B9-%E7%B2%89%E9%A3%B4%E9%A1%86%E7%B2%92-1kg/dp/B01BDD68NK/ref=as_li_ss_il?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&keywords=%E3%83%9E%E3%83%AB%E3%83%88%E3%83%87%E3%82%AD%E3%82%B9%E3%83%88%E3%83%AA%E3%83%B3&qid=1559976209&s=office-products&sr=8-1&linkCode=li2&tag=fitnesshub-22&linkId=206bade7e8e1507699d531fc050d1d3c&language=ja_JP" target="_blank"><img border="0" src="//ws-fe.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B01BDD68NK&Format=_SL160_&ID=AsinImage&MarketPlace=JP&ServiceVersion=20070822&WS=1&tag=fitnesshub-22&language=ja_JP" ></a><img src="https://ir-jp.amazon-adsystem.com/e/ir?t=fitnesshub-22&language=ja_JP&l=li2&o=9&a=B01BDD68NK" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
              <div class="media-body">
                <h4 class="text-text-capitalize m-3">粉飴</h4>
                <div class="clearfix">
                  <div class="float-right">
                    <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hfsoSA" target="_blank">楽天で見る</a>
                    <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2YZKRSm" target="_blank">Amazonで見る</a>
                  </div>
                </div>
              </div>
            </div> -->
            <hr id="lunch" class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 class="my-5" style="font-size: 18pt; color: #EC8179;">昼食（12時〜13時）</h2>
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
            <p>&nbsp&nbsp上の食事では、脂質量が目標より少なくなっています。外食などをすると、どうしても脂分の多い食事をとってしまうので余裕を持っておいても良いでしょう。<br>&nbsp&nbsp気になる方は<strong class="pink_line"> 野菜炒めにオリーブオイルを使用する</strong>ことをおすすめします。</p>
            <!-- <p>&nbsp&nbsp鮭の塩焼きは「アジの開き」や「焼きだら」などと代用できます。</p> -->
            <!-- <p><strong>&nbsp&nbsp"オイコス"</strong> は手軽にタンパク質を取ることのできる、最適なギリシャヨーグルトです。これからダイエットを始める人は用意しておくことを強くおすすめします。</p>
            <div class="col-9 offset-2">
              <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hfsoSA">楽天で購入</a>
              <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2YZKRSm">Amazonで購入</a>
            </div> -->

            <hr id="meal_1" class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 class="my-5" style="font-size: 18pt; color: #EC8179;">間食１（15時〜16時）</h2>
            <p>
              <ul>
                <li>タンパク質（P）：20 g</li>
                <li>脂質（F）：1.2 g</li>
                <li>炭水化物（C）：47.5 g</li>
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
                <td>一個</td>
                <td>{{$salmon_riceball->protein}}</td>
                <td>{{$salmon_riceball->fat}}</td>
                <td>{{$salmon_riceball->carb}}</td>
              </tr>
              <tr>
                <td>合計</td>
                <td></td>
                <td>20g</td>
                <td>1.2g</td>
                <td>47.5g</td>
              </tr>
            </table>
            <p>&nbsp&nbsp間食でのプロテイン摂取は<strong class="pink_line"> "ザバスミルクプロテイン"</strong> をおすすめします。１パックで１５g ものタンパク質を摂ることが出来、美味しく、持ち運びも便利です。</p>
            <p>&nbsp&nbspコンビニで買うことも出来ますが、<strong class="pink_line">ネットでまとめ買いをするとかなりお得</strong>ですのでおすすめです。</p>
            <div class="clearfix">
              <div class="float-right">
                <a class="btn btn btn-outline-secondary m-1" href="https://a.r10.to/hbOPaj" target="_blank">楽天で見る</a>
                <a class="btn btn btn-outline-secondary m-1" href="https://amzn.to/2YZfXtm" target="_blank">Amazonで見る</a>
              </div>
            </div>
            <hr id="dinner" class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 class="my-5" style="font-size: 18pt; color: #EC8179;">夕食（18時〜19時）</h2>
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
            <p>&nbsp&nbsp上の食事ではアボカドを用いて脂質を摂取していますが、代わりにパルメザンチーズなどを代用しても良いでしょう。</p>

            <hr id="meal_2" class="my-5" style="border:solid 0.5px #e26e66;">

            <h2 class="my-5" style="font-size: 18pt; color: #EC8179;">間食２（23時〜24時）</h2>
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
                <td>１杯</td>
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
            <p>&nbsp&nbsp寝る前のタンパク質は<strong class="pink_line"> 吸収の遅いカゼインプロテイン </strong>が最適です。</p>
            <p>&nbsp&nbspここでは<strong class="pink_line">ゴールドスタンダードというプロテイン</strong>を想定して計算しています。こちらのプロテインは安さ・品質・美味しさを兼ね備えており、<strong class="pink_line">全ての方におすすめ</strong>です。</p>
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
    <p>はじめに性別・身長・体重・運動強度を入力してください。</p>
    <a class="btn btn btn-outline-secondary m-1" href="#" onclick="window.history.back(); return false;">数値を入力する</a>
  </div>

</div>

@endif



@endsection

@section('footer')
copyright 2019 kota.
@endsection
