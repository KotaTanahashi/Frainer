<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
// use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Charts\DietChart;



class BodyController extends Controller
{
    public function index(Request $request)
    {
      return view('body.index');
    }
}

//=============================================================
// Class Difining =============================================

      // class Food
      // {
      //   public $protein = 0;
      //   public $fat = 0;
      //   public $carb = 0;
      //   public $one_gram = 0;
      //
      //   public function HowMany() {
      //     $howmany = $one_gram / 100;
      //   }
      //
      //   public function Need($ntr_sort, $require_gram)
      //   {
      //      if ($ntr_sort === 'protein'){
      //        $ratio = $require_gram / $this->protein;
      //      } elseif ($ntr_sort === 'fat') {
      //        $ratio = $require_gram / $this->fat;
      //      } elseif ($ntr_sort === 'carb') {
      //        $ratio = $require_gram / $this->carb;
      //      } else {
      //        $ratio = false;
      //      }
      //
      //      $this->protein = round($this->protein * $ratio, 1);
      //      $this->fat = round($this->fat * $ratio, 1);
      //      $this->carb = round($this->carb * $ratio, 1);
      //      $gram = round($ratio * 100, 1);
      //
      //      return ['protein' => $this->protein, 'fat' => $this->fat, 'carb' => $this->carb, 'gram' => $gram];
      //   }

        /*
          Food->
        */

        /*
        $ = new Food;
        $->protein = ;
        $->fat = ;
        $->carb = ;
        */


      // class Recipes
      // {
      //   public $protein;
      //   public $fat;
      //   public $carb;
      // }

      /*
      $ = new Recipes;
      $->protein;
      $->fat;
      $->carb;
      */

// End Class Defining ================================================
