
<!--ヘッダー-->
<header data-block-type="headers" data-id="6" class="">
  <div class="container text-center">
    <nav class="navbar">
      <a class="ml-auto mr-auto" href="https://www.froala.com">
        <img src="https://cdn.jsdelivr.net/gh/froala/design-blocks@2.0.1/dist/imgs//logo.png" height="30" alt="image">
      </a>
    </nav>
  </div>
</header>

<!--メインビジュアル-->
<section class="fdb-block" data-block-type="contents" data-id="8" draggable="true">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row justify-content-center pb-5">
          <div class="col-12 col-lg-8 text-center">
            <h1>Total Nutirition Support</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-8">
        <img alt="image" class="img-fluid" src="img/nutrition_ver2.jpg">
      </div>
    </div>
  </div>
</section>
<section class="fdb-block" data-block-type="forms" data-id="7" draggable="true">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-8 col-xl-6">
        <div class="row">
          <div class="col text-center">
            <h1>フォームを入力</h1>
            <p class="lead">全てのフォームを入力することでより正確な値が出ます。</p>
          </div>
        </div>
        <form action="/body" method="post">
          {{ csrf_field() }}
        <div class="row align-items-center">
          <div class="col mt-4">
            <input type="radio" class="form-control" name="gender" value="male">男性
            <input type="radio" class="form-control" name="gender" value="female">女性
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col">
            <input type="number" class="form-control" placeholder="年齢（才）" name="age">
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col">
            <input type="number"　class="form-control" placeholder="身長（ｃｍ）" name="height" step="0.1">
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col">
            <input type="number" class="form-control" placeholder="体重" name="weight" step="0.1">
          </div>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col">
            <input type="number" class="form-control" placeholder="体脂肪率" name="fat" step="0.1">
            <p>＊体脂肪率がわからない方は注１を参考にしてください</p>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col mt-4">
            <input type="radio" class="form-control" name="volume" value="volume1">ほとんどなし
            <input type="radio" class="form-control" name="volume" value="volume2">少し
            <input type="radio" class="form-control" name="volume" value="volume3">かなり
            <input type="radio" class="form-control" name="volume" value="volume4">本格的
          </div>
        </div>
        <div class="row justify-content-start mt-4">
          <div class="col">
            <button class="btn btn-primary mt-4">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="fdb-block fp-active" data-block-type="contents" data-id="3" draggable="true">
  <div class="container">
    <div class="row">
      <div class="col text-left">
        <h2>指標</h2>
      </div>
    </div>
  </div>
</section>
