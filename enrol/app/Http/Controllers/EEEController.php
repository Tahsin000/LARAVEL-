<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class EEEController extends Controller
{
    public function eee()
    {
        $eeestudent_info=DB::table('student_tbl')->where(['student_department'=>2])->get();

        $manage_student=view('admin.eee')->with('eee_student_info', $eeestudent_info);

        return view('admin.layout')->with('eee', $manage_student);
    }
}
