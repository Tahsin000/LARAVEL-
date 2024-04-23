<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

Session_start();

class AllstudentController extends Controller
{
    public function allstudent()
    {

        $allstudent_info = DB::table('student_tbl')->get();

        $manage_student = view('admin.allstudent')->with('all_student_info', $allstudent_info);

        return view('admin.layout')->with('allstudent', $manage_student);

        //return view('/admin.allstudent');
    }

    // student delete method
    public function studentdelete($student_id)
    {
        DB::table('student_tbl')->where('student_id', $student_id)->delete();

        return Redirect::to('/allstudent');
    }

    // student Student-view method
    public function studentview($student_id)
    {
        $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id)->first();
        $student_description_view = view('admin.studentview')->with('student_description_profile', $student_description_view);
        return view('admin.layout')->with('view', $student_description_view);
        // echo "</pre>";
        // print_r($student_description_view);
        // echo "</pre>";
        // return view('admin.studentview');
    }
    // student student-edit method 
    public function studentedit($student_id)
    {
        $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id)->first();

        $student_description_view = view('admin.studentedit')->with('student_description_profile', $student_description_view);
        return view('admin.layout')->with('view', $student_description_view);
        return view('admin.studentedit');
        // echo "</pre>";
        // print_r($student_description_view);
        // echo "</pre>";
    }
    // studentupdate
    public function studentupdate(Request $request, $student_id)
    {
        $date = array();
        $date['student_name'] = $request->student_name;
        $data['student_fathername'] = $request->student_fathername;
        $date['student_mothername'] = $request->student_mothername;
        $date['student_email'] = $request->student_email;
        $date['student_phone'] = $request->student_phone;
        $date['student_address'] = $request->student_address;
        $date['student_password'] = $request->student_password;
        $date['student_admissionyear'] = $request->student_admissionyear;
        $date['student_department'] = $request->student_department;

        DB::table('student_tbl')->where('student_id', $student_id)->update($date);

        Session::put('exception', 'student update successfully');
        return Redirect::to('/allstudent');
        // echo "</pre>";
        // print_r($student_id);
        // echo "</pre>";
    }
    // student_own_update
    public function student_own_update(Request $request)
    {
        $student_id = Session::get('student_id');
        $date = array();
        $date['student_phone'] = $request->student_phone;
        $date['student_address'] = $request->student_address;
        $date['student_password'] = md5($request->student_password);

        DB::table('student_tbl')->where('student_id', $student_id)->update($date);

        Session::put('exception', 'student update successfully');
        return Redirect::to('/student_setting');
        // echo "</pre>";
        // print_r($student_id);
        // echo "</pre>";
    }
}
