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

@endsection

@section('content')

  <div class="row my-5  py-5" style="background-color: #fff;">

      <div class="col mt-5">
        <img src="/img/cal_icon_1.png" class="rounded mx-auto d-block">
      </div>

      <div class="col-sm-12 text-center mt-5 mb-5" style="color: #666666;">
        <h1 class="font-weight-bold" style="font-family: 'Kosugi', sans-serif; font-size: 25pt;">指標計算フォーム</h1>
      </div>
      <div class="col-sm-12 text-center mb-5" style="color: #666666;">
        <p style="font-family: 'Kosugi', sans-serif; font-size: 12pt;">フォームに情報を入力するだけで、日々の栄養管理に必要な全ての指標が手に入ります。</p>
        <!-- <p style="font-family: 'Kosugi', sans-serif; font-size: 10pt;">＊体脂肪率と運動強度についてはページ下の表を参考にしてください。</p> -->
      </div>

      <div class="col">
        <a class="btn btn-lg btn-outline-green float-center my-1 mx-5 d-block mx-auto" href="#body_index_form" style="width: 250px;">始める</a>
      </div>

      <p id="body_index_form"/>
  </div>

  <div class="card mx-auto my-5 py-3 shadow"  style="max-width:470px;">
    <form action="/cal" method="post">
      {{ csrf_field() }}
          <div class="col btn-group btn-group-toggle my-3" data-toggle="buttons">
            <label class="btn btn-outline-secondary">
                <input type="radio" name="gender" value="male">男性
            </label>
            <label class="btn btn-outline-secondary">
                <input type="radio" name="gender" value="female">女性
            </label>
          </div>

          <div class="col my-3">
            <div class="col input-group my-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">年齢</span>
                  <input class="form-control" type="number" name="age">
              </div>
            </div>

            <div class="col input-group my-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">身長</span>
                  <input class="form-control" type="number" name="height" step="0.1">
              </div>
            </div>

            <div class="col input-group my-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">体重</span>
                  <input class="form-control" type="number" name="weight" step="0.1">
              </div>
            </div>

            <div class="col input-group my-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">  体脂肪率 </span>
                  <input class="form-control" type="number" name="fat" step="0.1" placeholder="">
              </div>
              <p class="m-2 text-secondary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp＊下の表を参考にしてください</p>

            </div>
          </div>

          <div class="col btn-group-toggle my-4" data-toggle="buttons">
            <label class="btn btn-outline-secondary ">
                <input type="radio" name="volume" value="volume1"> 強度１
            </label>
            <label class="btn btn-outline-secondary ">
                <input type="radio" name="volume" value="volume2"> 強度２
            </label>
            <label class="btn btn-outline-secondary">
                <input type="radio" name="volume" value="volume3"> 強度３
            </label>
            <label class="btn btn-outline-secondary">
                <input type="radio" name="volume" value="volume4"> 強度４
            </label>
            <p class="m-2 text-secondary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp＊下の表を参考にしてください</p>
          </div>

          <div class="form-group  float-right mr-3">
            <input class="btn btn-outline-secondary" type="submit" value="Send">
          </div>

    </form>
  </div>

  <div class="row mx-lg-5 my-3 px-3 text-secondary">
    <div class="col-lg-6 my-5">
      <h3>運動強度の目安</h3>
      <p>フォームの「強度」はこの表を参考してください</p>
      <table class="table text-secondary">
        <thead>
          <tr>
            <th>強度</th>
            <th>目安</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>強度１</td>
            <td>1日のほとんどを座って過ごす</td>
          </tr>
          <tr>
            <td>強度２</td>
            <td>座っている時間が長く、<br>通勤や家事で少し運動をする。</td>
          </tr>
          <tr>
            <td>強度３</td>
            <td>立ち仕事・外回り・家事などで、<br>かなり運動をしている。<br>もしくは、軽いスポーツを行なっている。</td>
          </tr>
          <tr>
            <td>強度４</td>
            <td>肉体労働や本格的なスポーツなどを<br>行なっている。</td>
          </tr>
        </tbody>
      </table>
    </div>

  <div class="col-lg-6 my-5">
      <h3>体脂肪率の目安</h3>
      <p>体脂肪率が分からない人はこの表を参考にしてください</p>
      <table class="table text-secondary">
        <thead>
          <tr>
            <th>体脂肪率</th>
            <th>見た目[男性]</th>
            <th>見た目[女性]</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1~4%</td>
            <td>極限状態</td>
            <td></td>
          </tr>
          <tr>
            <td>5~7%</td>
            <td>ほとんど脂肪がない</td>
            <td></td>
          </tr>
          <tr>
            <td>8~12%</td>
            <td>引き締まっている</td>
            <td>極限状態</td>
          </tr>
          <tr>
            <td>13~19%</td>
            <td>腹筋があまり見えない<br>一般的な体型</td>
            <td>ほとんど脂肪がない</td>
          </tr>
          <tr>
            <td>20~25%</td>
            <td>太り気味の体型<br>筋肉が見えない</td>
            <td>引き締まっている</td>
          </tr>
          <tr>
            <td>26~35%</td>
            <td>はっきりとした肥満<br>お腹が出ている</td>
            <td>健康的〜<br>少しふくよかな印象</td>
          </tr>
          <tr>
            <td>36~40%</td>
            <td>日常生活に支障をきたす</td>
            <td>軽い肥満<br>お腹が出ている。</td>
          </tr>
          <tr>
            <td>40%~</td>
            <td>危険状態</td>
            <td>肥満体型</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection

@section('footer')
copyright 2019 kota.
@endsection
