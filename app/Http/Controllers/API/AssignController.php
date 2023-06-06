<?php

namespace App\Http\Controllers\API;

use App\Models\Assign;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssignController extends Controller
{
    public function assignSearch(){
        dd('hi there');
    }

    public function depAll(){
        $dep_all = Department::whereNull('deleted_at')->get();
        // dd($dep_all);
        return $dep_all;
    }

    public function empAssign(Request $request){
        // dd($request);
        $data1 = Employee::find($request->id);
        $assign = $data1->assigns;
        $data1->assign = $assign;
        // $data2 = Assign::where('employee_id',$request->id)->whereNull('deleted_at')->get();
        // $emp = $data2->employee;

        return $data1;
    }
}
