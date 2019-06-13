<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\Libs\Food;
use App\Libs\Recipes;


class DietController extends Controller
{

  public function index(Request $request)
  {
    $data = $request->session()->get('data_diet');
    $result = $request->session()->get('result_diet');

    return view('diet.diet');
  }




  public function show(Request $request)
  {
    $data = $request->session()->get('data_diet');
    $result = $request->session()->get('result_diet');

    return view('diet.diet_show');
  }




  public function diet(Request $request)
  {
    $gender = $request->gender;
    $age = $request->age;
    $height_cm = $request->height;
    $height = $height_cm / 100;
    $weight = $request->weight;
    $volume = $request->volume;


    if ($volume === 'volume1' )
    {
      $volume_rate = 1.35;
    } elseif ($request->volume === 'volume2') {
      $volume_rate = 1.5;
    } elseif ($request->volume === 'volume3') {
      $volume_rate = 1.75;
    } elseif ($request->volume === 'volume4') {
      $volume_rate = 2;
    } else {
      $volume_rate = null;
    }


    if ($volume === 'volume1' )
    {
      $volume_jp = '強度１';
    } elseif ($request->volume === 'volume2') {
      $volume_jp = '強度２';
    } elseif ($request->volume === 'volume3') {
      $volume_jp = '強度３';
    } elseif ($request->volume === 'volume4') {
      $volume_jp = '強度４';
    } else {
      $volume_jp = '性別が選択されていません。';
    }


    if (isset($gender))
    {
      if ($gender === 'male') {
        $gender_jp = '男';
      } elseif ($gender === 'female') {
        $gender_jp = '女';
      } else {
        $gender_jp = '選択されていません.';
      }
    } else {
      $gender_jp = null;
    }


// 基礎代謝
    if (isset($weight) && isset($height))
    {
      if ($gender === 'male')
      {
        $base = round(13.397 * $weight + 4.799 * $height * 100 - 5.677 * $age + 88.362, 1);
      } elseif ($gender === 'female') {
        $base = round(9.247 * $weight + 3.098 * $height * 100 - 4.33 * $age + 447.593, 1);
      } else {
        $base = '性別を入力してください。';
      }
    } else {
      $base = '身長・体重を入力してください。';
    }


// Calorie （１日の消費カロリー）
    if (isset($volume_rate) && is_numeric($base))
    {
      $day = round($base * $volume_rate,1);
    } else {
      $day = '性別と運動強度を入力してください。';
    }


// Diet
    if (is_numeric($day))
    {
      $day_diet = round($day * 0.75, 1);
    } else {
      $day_diet = null;
    }


    $day_protein = $weight * 2;
    $day_fat = round($day_diet * 0.15 / 9, 1);
    $day_carb = round(($day_diet - $day_protein * 4 - $day_fat * 9) / 4, 1);

// 白米
    $whiterice = new Food;
    $whiterice->protein = 2.5;
    $whiterice->fat = 0.1;
    $whiterice->carb = 37.1;
// 鳥の胸肉
    $chicken = new Food;
    $chicken->protein = 38.8;
    $chicken->fat = 3.3;
    $chicken->carb = 0.1;
// さけ
    $salmon = new Food;
    $salmon->protein = 28.1;
    $salmon->fat = 7.7;
    $salmon->carb = 0.1;
// マグロ
    $tuna = new Food;
    $tuna->protein = 25.4;
    $tuna->fat = 2.3;
    $tuna->carb = 0.3;
// オリーブオイル
    $olive = new Food;
    $olive->protein = 0;
    $olive->fat = 100;
    $olive->carb = 0;
// オイコス
    $oikos = new Food;
    $oikos->protein = 11.7;
    $oikos->fat = 0;
    $oikos->carb = 5.1;
// ザバスミルクプロテイン
    $zabas = new Food;
    $zabas->protein = 15;
    $zabas->fat = 0;
    $zabas->carb = 10.5;
// ゴールドスタンダード
    $gold = new Food;
    $gold->protein = 24;
    $gold->carb = 0;
    $gold->fat = 3;
// 納豆
    $nattou = new Food;
    $nattou->protein = 7.4;
    $nattou->fat = 4.5;
    $nattou->carb = 5.4;
    $nattou->one_gram = 45;
// 野菜炒め  = ２００グラム推定
    $friedvgt = new Recipes;
    $friedvgt->protein = 3.4;
    $friedvgt->fat = 4.0;
    $friedvgt->carb = 12.0;
// さけおにぎり
    $salmon_riceball = new Recipes;
    $salmon_riceball->protein = 5;
    $salmon_riceball->fat = 1.2;
    $salmon_riceball->carb = 37;
// 味噌汁 = 茶碗一杯
    $miso_soup = new Recipes;
    $miso_soup->protein = 2;
    $miso_soup->fat = 0.44;
    $miso_soup->carb = 5.86;
// サラダ ＝ 155グラム
    $avocado_salad = new Recipes;
    $avocado_salad->protein = 2.78;
    $avocado_salad->fat = 15.46;
    $avocado_salad->carb = 8.86;


// Morning Menu ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// さけ、味噌汁、白米、オイコス


    $morning_protein = round(($day_protein - ($zabas->protein + $gold->protein + $salmon_riceball->protein)) / 3, 1);
    $morning_fat = round(($day_fat - $salmon_riceball->fat) / 3, 1);
    $morning_carb = round(($day_carb - ($zabas->carb + $gold->carb + $salmon_riceball->carb)) / 3, 1);

    // 体重６０キロ以下の人は納豆のみを食べる、６０キロ以上の人は鮭の塩焼きを必要カロリーに応じて
    // 納豆の時は面倒臭いから $morning_salmon に配列で格納
    $morning_whiterice = $whiterice->Need('carb', $morning_carb - $oikos->carb - $miso_soup->carb);
    if ($weight < 60) {
      $morning_dish = '納豆';
      $morning_salmon = $nattou->Need('protein', $morning_protein - $oikos->protein - $morning_whiterice['protein'] - $miso_soup->protein);
    } elseif ($weight >= 60) {
      $morning_dish = '鮭の塩焼き';
      $morning_salmon = $salmon->Need('protein', $morning_protein - $oikos->protein - $morning_whiterice['protein'] - $miso_soup->protein);
    }
    $morning_sum_fat = $morning_salmon['fat'] + $miso_soup->fat + $morning_whiterice['fat'] + $oikos->fat;

    // $morning_slmon, $morning_whiterice => 配列格納


// Lunch Menu ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// 鶏むね肉、野菜炒め、白米

    $lunch_protein = $morning_protein;
    $lunch_fat = $morning_fat;
    $lunch_carb = $morning_carb;

    $lunch_whiterice = $whiterice->Need('carb', $lunch_carb - $friedvgt->carb);
    $lunch_chicken = $chicken->Need('protein', $lunch_protein - $friedvgt->protein);

    $lunch_sum_fat = $lunch_chicken['fat'] + $friedvgt->fat + $lunch_whiterice['fat'];

    // $lunch_chicken, $lunch_whiterice => 配列格納


// Dinner Menu ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// マグロ、パルメザンサラダ、白米

    $dinner_protein = $morning_protein;
    $dinner_fat = $morning_fat;
    $dinner_carb = $morning_carb;

    $dinner_whiterice = $whiterice->Need('carb', $dinner_carb - $avocado_salad->carb);
    $dinner_tuna = $tuna->Need('protein', $dinner_protein - $avocado_salad->protein - $dinner_whiterice['protein']);

    $dinner_sum_fat = $dinner_tuna['fat'] + $avocado_salad->fat + $dinner_whiterice['fat'];

    // $dinner_tuna, $dinner_whiterice => 配列格納


// Session putting ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

  $all_data = $request->all();
  $request->session()->put('data_diet', $all_data);

  $param = compact(
      'gender',
      'gender_jp',
      'age',
      'weight',
      'height_cm',
      'height',
      'volume',
      'volume_jp',
      'volume_rate',
      'base',
      'day',
      'day_diet',
      'day_protein',
      'day_fat',
      'day_carb',
// 食品データ
      'whiterice', 'chicken', 'salmon', 'tuna' ,
      'olive', 'oikos', 'zabas', 'gold', 'friedvgt',
      'salmon_riceball','miso_soup', 'avocado_salad',
// Morning
      'morning_protein', 'morning_fat', 'morning_carb',
      'morning_whiterice', 'morning_salmon', 'morning_sum_fat',
      'morning_dish',
// Lunch
      'lunch_protein', 'lunch_fat', 'lunch_carb',
      'lunch_whiterice', 'lunch_chicken', 'lunch_sum_fat',
// Dinner
      'dinner_protein', 'dinner_fat', 'dinner_carb',
      'dinner_whiterice', 'dinner_tuna' , 'dinner_sum_fat'

      //'' => , '' => , '' => , '' => , '' => , '' => ,
    );

    $request->session()->put('result_diet', $param);


    return view('diet/diet_show', $param);
  }
}
