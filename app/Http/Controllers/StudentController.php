<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        return view("home",["students" => Student::all()]);
    }
    public function store(Request $req){
        $req->validate([
            "name" => "required",
            "contact" => "required|size:10",
            "maths" => "required|integer",
            "sci" => "required",
            "sst" => "required",
            "eng" => "required",
            "hindi" => "required",

        ]);
        $std = new Student();
        $std->name = $req->name;
        $std->contact = $req->contact;
        $std->maths = $req->maths;
        $std->sci = $req->sci;
        $std->sst = $req->sst;
        $std->eng = $req->eng;
        $std->hindi = $req->hindi;
        $std->save();

        return redirect()->route("homepage")->with("msg","Data inserted successfully");
    }

    public function destroy($std_id){
        $data = Student::find($std_id);
        $data->delete();

        return redirect()->route("homepage")->with("msg","data deleted successfully");
    }

    public function viewResult($roll){
        $student = Student::find($roll);
        return view("view",["student"=>$student]);
    }

    public function search(Request $req){
        $roll = $req->search;
        return $this->viewResult($roll);
    }
}
