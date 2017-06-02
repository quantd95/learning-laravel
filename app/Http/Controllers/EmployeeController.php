<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insert(Request $req) 
    {
    	$name = $req->input('name');
        $DoB = $req->input('DoB');
        $address = $req->input('address');
        $gender = $req->input('gender');
        $department = $req->input('department');

        $data = array('name'=>$name, 'DoB'=>$DoB, 'address'=>$address, 'gender'=>$gender, 'department'=>$department);

        DB::table('employee')->insert($data);

        echo "Success!!!";
    }

    public function getData()
    {
        $data = DB::table('employee')->get();        
        return view('employee/add')->with(['data'=>$data]);
        
    }

    public function update(Request $req, $id) 
    {
        $name = $req->input('name');
        $DoB = $req->input('dob');
        $address = $req->input('address');
        $gender = $req->input('gender');
        $department = $req->input('department');

        $data = array('name'=>$name, 'DoB'=>$DoB, 'address'=>$address, 'gender'=>$gender, 'department'=>$department);

        $employee = DB::table('employee')->where('name', $id)->update($data);

        echo "Success!!!";
    }

    public function edit($id)
    {
        $employee = DB::table('employee')->where('name', $id)->first();
        return view('employee/edit')->with(['employee'=>$employee]);
    }

    public function delete($id) 
    {
        $employee = DB::table('employee')->where('name', $id)->delete();

        echo "Success!!!";
    }
}
