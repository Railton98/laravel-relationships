<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToManyController extends Controller
{
  public function manyToMany()
  {
    $city = City::where('name', 'São Paulo')->get()->first();
    echo "<b>{$city->name}</b> <br>";

    $companies = $city->companies;
    foreach ($companies as $company) {
      echo " {$company->name}, ";
    }
  }

  public function manyToManyInverse()
  {
    $company = Company::where('name', 'Hatun\'s Software')->get()->first();
    echo "<b>{$company->name}</b> <br>";

    $cities = $company->cities;
    foreach ($cities as $city) {
      echo " {$city->name}, ";
    }
  }

  public function manyToManyInsert()
  {
    $dataForm = [6, 7, 8, 9, 10];

    $company = Company::find(1);
    echo "<b>{$company->name}</b> <br>";

    //$company->cities()->attach($dataForm);
    $company->cities()->sync($dataForm);

    $cities = $company->cities;
    foreach ($cities as $city) {
      echo " {$city->name}, ";
    }
  }

}
