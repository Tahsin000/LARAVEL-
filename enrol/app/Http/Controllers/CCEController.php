<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class CCEController extends Controller
{
    public function cce()
    {
        $ccestudent_info=DB::table('student_tbl')->where(['student_department'=>4])->get();

        $manage_student=view('admin.cce')->with('cce_student_info', $ccestudent_info);

        return view('admin.layout')->with('cce', $manage_student);
    }
}
