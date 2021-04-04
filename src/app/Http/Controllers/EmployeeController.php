<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index(){
       // dd('hello2');
        return view('employee');
    }
    public function store(Request $request){
        //dd($request);
        $employee = new Employee();
        
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->post = $request->input('post');
        
        // if($request->hasfile('image')){
        //     $file=$request->file('image');
        //     $extension=$file->getClientOriginalExtension();//get image extension
        //     $filename= time() . '.' . $extension;
        //     $file->move('uploads/employee', $filename);
        //     $employee->image=$filename;
        // }else{
        //     return $request;
        //     $employee->image = '';
        // }
       // dd($employee);
        $employee->save();
        return view('employee')->with('employee', $employee);
    }
}
