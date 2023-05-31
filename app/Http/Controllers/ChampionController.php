<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use App\Rules\UniqueUpdateChampionName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;


class ChampionController extends Controller
{

    public function validateChamp(Request $request){

        $validated = $request->validate([
            'name'=>['required','max:25','unique:champions'],
            'img'=>'required|image|mimes:png,jpg,jpeg|max:2048',
            'genderSelect'=>['required', Rule::notIn([0])],
            'positionSelect'=>['required', Rule::notIn([0])],
            'specieSelect'=>['required', Rule::notIn([0])],
            'resourceSelect'=>['required', Rule::notIn([0])],
            'range_typeSelect'=>['required', Rule::notIn([0])],
            'regionSelect'=>['required', Rule::notIn([0])],
            'quote'=>['required','max:200'],
            'year'=>['integer','max:3000']
        ]);

        if($validated){
            $imageName = $request->name.'.'.$request->img->extension();
            $request->img->move(public_path('assets/img/champions'), $imageName);
            $champModel = new Champion();
            $champModel->insertChamp($validated,$imageName);
            return redirect()->route('champions')->with("success", "Champion added successfully");
        }

        return redirect()->route('champions');

    }

    public function deleteChamp($id)
    {
        $championModel = new Champion();
        $championModel->deleteChampion($id);
        $championImg= $championModel->getImg($id);
        File::delete(public_path('assets/img/champions/'.$championImg));
        $champions = $championModel->getChampions();
        return request()->json('data',$champions);
    }

    public function showChamp($id){
        $championModel = new Champion();
        $champion=$championModel->getChampion($id);
        $data=array();
        $tables = ['genders','positions','species','resources','regions'];
        foreach ($tables as $table) {
            $metaData= $championModel->getIdAndVal($table);
            $data[$table]=$metaData;
        }
        return view('adminPanel/pages/editChamp',['champion' => $champion,'data'=>$data]);
    }

    public function updateChamp(Request $request){
        $validated = $request->validate([
            'name'=>['required','max:25',new UniqueUpdateChampionName($request->get("idChamp"))],
            'genderSelect'=>['required', Rule::notIn([0])],
            'positionSelect'=>['required', Rule::notIn([0])],
            'specieSelect'=>['required', Rule::notIn([0])],
            'resourceSelect'=>['required', Rule::notIn([0])],
            'regionSelect'=>['required', Rule::notIn([0])],
            'quote'=>['required','max:200'],
            'year'=>['integer','max:3000']
        ]);

        if($validated){
            $champModel = new Champion();
            $champModel->updateChampion($request);
            return redirect()->route('champions');
        }
    }

    public function getChampions(){
        $championModel = new Champion();
        $champions = $championModel->getChampions();
        return request()->json('data',$champions);
    }

}
