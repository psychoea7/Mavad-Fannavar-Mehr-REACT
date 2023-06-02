<?php

use App\Models\Visit;
use Carbon\Carbon;

function generateName($get){

    $year = Carbon::now()->year;

    $month = Carbon::now()->month;

    $day = Carbon::now()->day;

    $second = Carbon::now()->second;

    $microsecond = Carbon::now()->microsecond;


return $year . '_' . $month . '_' . $day . '_' . $second . '_' . $microsecond . '_' . $get;

}

function visit($ip , $date){
    $check = Visit::where('ip' , $ip)->where('time' , $date)->first();

    if(!$check){
        Visit::create([
            'ip' => $ip,
            'time' => $date
        ]);
    }
}
