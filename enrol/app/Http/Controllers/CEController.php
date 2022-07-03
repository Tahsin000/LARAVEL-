<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class CEController extends Controller
{
    public function ce()
    {
        $cestudent_info=DB::table('student_tbl')->where(['student_department'=>5])->get();

        $manage_student=view('admin.ce')->with('ce_student_info', $cestudent_info);

        return view('admin.layout')->with('ce', $manage_student);
    }
}
