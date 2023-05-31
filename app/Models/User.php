<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    public function registerUser($user){
        DB::table('users')->insert([
            'username'=>$user['username'],
            'email'=>$user['email'],
            'password'=>md5($user['password']),
            'role_id'=>2
        ]);
    }

    public function getUsers(){
        return DB::table('users')
            ->join('roles','users.role_id','=','roles.id')
            ->get();
    }

    public function getIdAndVal($table){
        $$table =DB::table($table)->select('id','value')->get();
        return $$table;
    }

    public function insertUser($user){
        DB::table('users')->insert([
            'username'=>$user['username'],
            'email'=>$user['email'],
            'password'=>md5($user['password']),
            'role_id'=>$user['roleSelect']
        ]);
    }


}
