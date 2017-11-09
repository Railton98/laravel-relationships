<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
  public function oneToOne()
  {
    $country = Country::where('name', 'China')->get()->first();

    echo $country->name;

    $location = $country->location;
    echo "<hr>Latitude: {$location->latitude}<br />";
    echo "Longitude: {$location->longitude}<br />";
  }

  public function oneToOneInverse()
  {
    $lat = 456;
    $lon = 654;

    $location = Location::where('latitude', $lat)
                          ->where('longitude', $lon)
                          ->get()
                          ->first();
    $country = $location->country;
    echo $country->name;
  }

  public function oneToOneInsert()
  {
    $dataForm = [
      'name' => 'Bélgica',
      'latitude' => '66',
      'longitude' => '66',
    ];

    $country = Country::create($dataForm);
    /*
    $location = new Location;
    $location->latitude = $dataForm['latitude'];
    $location->longitude = $dataForm['longitude'];
    $location->country_id = $country->id;
    $saveLocation = $location->save();
    */

    $location = $country->location()->create($dataForm);
    var_dump($location);

  }

}
