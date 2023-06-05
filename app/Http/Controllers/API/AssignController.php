<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;

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
}
