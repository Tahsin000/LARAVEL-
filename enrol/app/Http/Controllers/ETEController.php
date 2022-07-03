<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class ETEController extends Controller
{
    public function ete()
    {
        $etestudent_info=DB::table('student_tbl')->where(['student_department'=>3])->get();

        $manage_student=view('admin.ete')->with('ete_student_info', $etestudent_info);

        return view('admin.layout')->with('ete', $manage_student);
    }
}
