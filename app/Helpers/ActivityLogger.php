<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class ActivityLogger
{
    public  static function LogActivity($name) {
        $requestData = json_encode(request()->all());
        if(session()->has("user")){
            $user = session()->get("user")->email;
        }
        elseif(session()->has("admin")){
            $user = session()->get("admin")->email;
        }
        else{
            $user = request()->ip();
        }
        DB::table("activity_log")->insert([
            "name" => $name,
            "dateTime" => \Carbon\Carbon::now()->toDateTimeString(),
            "user" => $user,
            "requestData" => $requestData
        ]);
    }
}
