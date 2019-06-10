<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class CalController extends Controller
{

  public function index(Request $request)
  {
    $data = $request->session()->get('data_cal');
    $result = $request->session()->get('result_cal');

    return view('cal.cal');
  }




  public function show(Request $request)
  {

    $data = $request->session()->get('data_cal');
    $result = $request->session()->get('result_cal');

    return view('cal.cal_show');
  }




  public function cal(Request $request)
  {

    $gender = $request->gender;
    $age = $request->age;
    $height = $request->height / 100;
    $weight = $request->weight;
    if (isset($request->fat))
    {
      $fat = $request->fat / 100;
    } else {
      $fat = null;
    }
    if ($request->volume === 'volume1' )
    {
      $volume = 1.35;
    } elseif ($request->volume === 'volume2') {
      $volume = 1.5;
    } elseif ($request->volume === 'volume3') {
      $volume = 1.75;
    } elseif ($request->volume === 'volume4') {
      $volume = 2;
    } else {
      $volume = null;
    }


// BMI ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($weight) && isset($height))
    {
      $bmi = round($weight / $height**2, 1);
    } else {
      $bmi = '身長と体重を入力してください。';
    }


    if (is_numeric($bmi)) {
      if ($bmi < 16) {
        $bmi_comment = 'BMIによると、あなたは「痩せすぎ」です。';
      } elseif ($bmi >= 16 && $bmi < 17 ) {
        $bmi_comment = 'BMIによると、あなたは「痩せ」傾向にあります。';
      } elseif ($bmi >= 17 && $bmi < 18.5) {
        $bmi_comment = 'BMIによると、あなたは「痩せ気味」です。';
      } elseif ($bmi >= 18.5 && $bmi < 25) {
        $bmi_comment = 'BMIによると、あなたは「普通体重」です。';
      } elseif ($bmi >= 25 && $bmi < 30) {
        $bmi_comment = 'BMIによると、あなたは「前肥満」です。';
      } elseif ($bmi >= 30 && $bmi < 35) {
        $bmi_comment = 'BMIによると、あなたは「肥満（１度）」です。';
      } elseif ($bmi >= 35 && $bmi < 40) {
        $bmi_comment = 'BMIによると、あなたは「肥満（２度）」です。';
      } elseif ($bmi >= 40) {
        $bmi_comment = 'BMIによると、あなたは「肥満（３度」）です。';
      } else {
        $bmi_comment = 'BMIは計算されていません。';
      }
    } else {
      $bmi_comment = 'BMIは計算されていません。';
    }


// FFMI ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($fat) && is_numeric($bmi))
    {
      $ffmi = round($weight * (1 - $fat) / $height**2, 1);
    } else {
      $ffmi = '体脂肪率を入力してください。';
    }


    if (is_numeric($ffmi)) {
      if ($gender === 'male') {
        if ($ffmi < 18) {
          $ffmi_comment = 'FFMIによると、あなたは「細身」です。';
        } elseif ($ffmi >= 18 && $ffmi <20) {
          $ffmi_comment = "FFMIによると、あなたは「標準的」です。\n＊太り気味の可能性あり。";
        } elseif ($ffmi >= 20 && $ffmi <22) {
          $ffmi_comment = "FFMIによると、あなたは「アスリート体型」です。\n＊太り気味の可能性あり。";
        } elseif ($ffmi >= 22 && $ffmi <23.5) {
          $ffmi_comment = 'FFMIによると、あなたは「筋トレマニア」です。';
        } elseif ($ffmi >= 23.5 && $ffmi <25) {
          $ffmi_comment = 'FFMIによると、あなたは「かなりのマッチョ」です。';
        } else {
          $ffmi_comment = 'あなたは人間のレベルを超えました。';
        }
      } elseif ($gender === 'female') {
        if ($ffmi < 15) {
          $ffmi_comment = 'FFMIによると、あなたは「細身」です。';
        } elseif ($ffmi >= 15 && $ffmi <16) {
          $ffmi_comment = "FFMIによると、あなたは「標準的」です。\n＊太り気味の可能性あり。";
        } elseif ($ffmi >= 16 && $ffmi <18) {
          $ffmi_comment = "FFMIによると、あなたは「アスリート体型」です。\n＊太り気味の可能性あり。";
        } elseif ($ffmi >= 18 && $ffmi <20) {
          $ffmi_comment = 'FFMIによると、あなたは「筋トレマニア」です。';
        } elseif ($ffmi >= 20 && $ffmi <21) {
          $ffmi_comment = 'FFMIによると、あなたは「かなりのマッチョ」です。';
        } else {
          $ffmi_comment = 'あなたは人間のレベルを超えました。';
        }
      } else {
        $ffmi_comment = 'FFMIは計算されていません。';
      }
    } else {
      $ffmi_comment = 'FFMIは計算されていません。';
    }


// Base （基礎代謝量）~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (is_numeric($bmi))
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


// Calorie （１日の消費カロリー）~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($volume) && is_numeric($base))
    {
      $day = round($base * $volume,1);
    } else {
      $day = '性別と運動強度を入力してください。';
    }


// Nutritions （栄養素） ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (is_numeric($day) && is_numeric($base))
    {
      $protein_min = round($day * 0.13 / 4,);
      $protein_max = round($day * 0.2 / 4,);
      $fat_mini = round($day * 0.2 / 9,);
      $fat_max = round($day * 0.3 / 9,);
      $carb_min = round($day * 0.5 / 4, );
      $carb_max = round($day * 0.65 / 4, );

      $nutrition = [
        'protein' => $protein_min . ' - ' . $protein_max . ' g',
        'fat' => $fat_mini . ' - ' . $fat_max . ' g',
        'carb' => $carb_min . ' - ' . $carb_max . ' g',
      ];

    } else {
      $nutrition = [
        'protein' => '性別と運動強度を入力してください。',
        'fat' => '性別と運動強度を入力してください。',
        'carb' => '性別と運動強度を入力してください。',
      ];
    }


    $all_data = $request->all();

    $request->session()->put('data_cal', $all_data);

    $param = [
      'bmi' => $bmi,
      'bmi_comment' => $bmi_comment,
      'ffmi' => $ffmi,
      'ffmi_comment' => $ffmi_comment,
      'base' => $base,
      'day' => $day,
      'nutrition' => $nutrition,
    ];

    $request->session()->put('result_cal', $param);


    return view('cal.cal_show', $param);
  }

}
