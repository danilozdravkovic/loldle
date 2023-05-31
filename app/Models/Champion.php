<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use stdClass;

class Champion extends Model
{
    public function getIdAndVal($table){
        $$table =DB::table($table)->select('id','value')->get();
        return $$table;
    }

    public function insertChamp($champ,$src){
        $id=DB::table('champion_image')->insertGetId([
            'src'=>$src,
            'alt'=>$champ['name'],
            'created_at'=>gmdate('Y-m-d h:i:s')
        ]);
        DB::table('champions')->insert([
            'name'=>$champ['name'],
            'championImg_id'=>$id,
            'gender_id'=>$champ['genderSelect'],
            'position_id'=>$champ['positionSelect'],
            'specie_id'=>$champ['specieSelect'],
            'resource_id'=>$champ['resourceSelect'],
            'rangeType_id'=>$champ['range_typeSelect'],
            'region_id'=>$champ['regionSelect'],
            'releaseYear'=>$champ['year'],
            'quote'=>addslashes($champ['quote']),
            'created_at'=> gmdate('Y-m-d h:i:s')
        ]);

    }

    public function getChampions(){
           return DB::table('champions')
            ->join('champion_image','champions.championImg_id','=','champion_image.id')
            ->join('genders','champions.gender_id','=','genders.id')
            ->join('species','champions.specie_id','=','species.id')
            ->join('resources','champions.resource_id','=','resources.id')
            ->join('range_types','champions.rangeType_id','=','range_types.id')
            ->join('regions','champions.region_id','=','regions.id')
            ->join('positions','champions.position_id','=','positions.id')
            ->select('champions.*', 'champion_image.src', 'champion_image.alt','genders.value as gender','positions.value as position','species.value as specie','range_types.value as range','regions.value as region','resources.value as resource')
           ->get();
    }

    public function getChampion($id){
        return DB::table('champions')
            ->where('id','=',$id)
            ->get();
    }

    public function updateChampion($champion){
        DB::table('champions')
            ->where('id', '=',$champion->idChamp)
            ->update(['name' => $champion->name,'gender_id'=>$champion->genderSelect,'position_id'=>$champion->positionSelect,'specie_id'=>$champion->specieSelect,'resource_id'=>$champion->resourceSelect,'region_id'=>$champion->regionSelect,'quote'=>$champion->quote,'releaseYear'=>$champion->year,'updated_at'=>gmdate('Y-m-d h:i:s')]);
    }

    public function deleteChampion($id){
        DB::table('champions')->where('id', '=', $id)->delete();
        DB::table('champion_image')->where('id', '=', $id)->delete();
    }

    public function getImg($id){
        return DB::table('champions')
                ->join('champion_image','champions.championImg_id','=','champion_image.id')
            ->select('champion_image.src')
            ->where('champions.id','=',$id)
            ->get();
    }


}
