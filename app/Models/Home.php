<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Home extends Model
{
    public function getMenu(){
        return DB::table('menu')->get();
    }

    public function getActLogs(){
       $activityLogs = DB::table('activity_log')->paginate(10);
       $numberOfLogs = DB::table('activity_log')->count();
       $numberOfPages = ceil($numberOfLogs/10);
       return ['activityLogs'=>$activityLogs,'numberOfPages'=>$numberOfPages];
    }
}
