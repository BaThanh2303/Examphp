<?php

namespace App\Http\Controllers;

use App\Models\Student;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function student()
    {
        $students = DB::table("students")->get();
        return view("pages.student", compact("students"));
    }

    public function NewStudent()
    {
        return view("pages.NewStudent");
    }

    public function Update(\Illuminate\Http\Request $request)
    {
        $student = Student::create([
            "name"=>$request->get("name"),
            "age"=>$request->get("age"),
            "address"=>$request->get("address"),
            "telephone"=>$request->get("telephone"),
        ]);
        return redirect()->to("/");
    }
}
