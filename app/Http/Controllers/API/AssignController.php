<?php

namespace App\Http\Controllers\API;

use App\Models\Assign;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        // $data1 = Employee::find($request->id);
        // $assign = $data1->assigns;
        // $data1->assign = $assign;
        // $data2 = Assign::where('employee_id',$request->id)->whereNull('deleted_at')->get();
        // $emp = $data2->employee;

        // $assign_title = DB::table('assigns')->where('employee_id',$request->id)->value('title');

        // $assign_title = DB::table('assigns')->where('employee_id',$request->id)->pluck('title');
        // foreach ($assign_title as $k => $v) {
        //    return $k . ','. $v;
        //     # code...
        // }
        // $emp_data = DB::table('employees')->distinct()->get()->toArray();

        // $emps = DB::table('employees')->whereNotBetween('id', [1, 100])->get();
          
        // $user = DB::table('employees')->latest() ->first();

        // $randomUser = DB::table('employees')->inRandomOrder()->get();

        // $emp_ass = DB::table('employees')->crossJoin('assigns')->get();

        // $emp_ass = DB::table('employees')->join('assigns', function ($join) {
        //     $join->on('employees.id', '=', 'assigns.employee_id');
        // })->get();

        $latestPosts = DB::table('assigns')
                            ->select('employee_id', DB::raw('MAX(end_date) as last_post_created_at'))
                            ->where('progress','>',50)
                            ->groupBy('employee_id');
        $users = DB::table('employees')
                    ->joinSub($latestPosts, 'latest_posts', function ($join) {
                                $join->on('employees.id', '=', 'latest_posts.employee_id');
                    })->get();


       
        return $users;
    }
}
