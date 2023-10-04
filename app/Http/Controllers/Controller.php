<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function student(){
        $students = DB::table("students")->orderBy("created_at","desc")
            ->orderBy("created_at","desc")->get();
        return view("pages.student",compact("students"));
    }
    public function NewStudent(){
        return view("pages.NewStudent");
    }
    public function Update(Request $request){

    }
}
