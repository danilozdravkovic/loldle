<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data=array();
        $championModel = new Champion();
        $tables = ['genders','positions','species','resources','range_types','regions'];
        foreach ($tables as $table) {
            $metaData= $championModel->getIdAndVal($table);
            $data[$table]=$metaData;
        }
        $allChampions = $championModel->getChampions();
        return view('adminPanel/pages/champions',['champions' => $data,'allChampions'=>$allChampions]);
    }

    public function indexUsers(){
        try{
            $userModel = new User();
            $users=$userModel->getUsers();
            $roles=$userModel->getIdAndVal('roles');
            return view('adminPanel/pages/users',['users'=>$users,'roles'=>$roles]);
        }
        catch (\Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function activityLog(){
        $homeModel = new Home();
        $data = $homeModel->getActLogs();
        return view('adminPanel/pages/activityLog',["data"=>$data]);
    }


}
