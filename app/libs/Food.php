<?php
namespace App\Libs;

class Food
{
  public $protein = 0;
  public $fat = 0;
  public $carb = 0;
  public $one_gram = 100;

  public function HowMany() {
    $howmany = $one_gram / 100;
  }

  public function Need($ntr_sort, $require_gram)
  {
     if ($ntr_sort === 'protein'){
       $ratio = $require_gram / $this->protein;
     } elseif ($ntr_sort === 'fat') {
       $ratio = $require_gram / $this->fat;
     } elseif ($ntr_sort === 'carb') {
       $ratio = $require_gram / $this->carb;
     } else {
       $ratio = false;
     }

     $protein = round($this->protein * $ratio, 1);
     $fat = round($this->fat * $ratio, 1);
     $carb = round($this->carb * $ratio, 1);
     $gram = round($ratio * $this->one_gram, 1);

     return ['protein' => $protein, 'fat' => $fat, 'carb' => $carb, 'gram' => $gram];
  }
}


class Recipes
{
    public $protein;
    public $fat;
    public $carb;
}
