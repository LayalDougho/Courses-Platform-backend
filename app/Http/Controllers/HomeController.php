<?php

namespace App\Http\Controllers;

use App\Models\General_Discount;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function generaldiscount(){
        $data=General_Discount::find(1);
        if($data!=null){
            return response()->json(['message'=>'success','data'=>$data],200);
        }else{
            return response()->json(['error'=>'no discount found'],500);
        }
        
    }
    public function allprograms(){
        $programs = Program::all();
        if($programs!=null){
        return $this->successResponse(message:'success',data: $programs);
        }else{
            return $this->failedResponse(message:'No program founded');
        }
    }
    public function program($id){
        $probyid = Program::find($id);
        if($probyid!=null){
        return $this->successResponse(message:'success',data: $probyid);
        }else{
            return $this->failedResponse(message:'No program founded');
        }
    }
}
