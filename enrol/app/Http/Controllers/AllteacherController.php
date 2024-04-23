<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;

Session_start();

class AllteacherController extends Controller
{
    //All Teacher Method
    public function allteacher()
    {
        $allteacher_info = DB::table('teachers_tbl')->get();

        $manage_teacher = view('admin.allteacher')->with('all_teacher_info', $allteacher_info);

        return view('admin.layout')->with('allteacher', $manage_teacher);

        //return view('/admin.allstudent');
    }

    //Add Teacher Method
    public function addteacher()
    {
        return view('/admin.addteacher');
    }
    // Save Teacher Method
    public function saveteacher(Request $request)
    {
        $data = array();
        $data['teacher_id'] = $request->teacher_id;
        $data['teacher_name'] = $request->teacher_name;
        $data['teacher_email'] = $request->teacher_email;
        $data['teacher_phone'] = $request->teacher_phone;
        $data['teacher_address'] = $request->teacher_address;
        $data['teacher_password'] = md5($request->teacher_password);
        $data['teacher_department'] = $request->teacher_department;
        $image = $request->file('teacher_image');
        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['teacher_image'] = $image_url;
                DB::table('teachers_tbl')->insert($data);
                Session::put('exception', 'Teacher Added Successfully!!');
                return Redirect::to('/allteacher');
            }
        }
        $data['teacher_image'] = $image_url;
        DB::table('teachers_tbl')->insert($data);
        Session::put('exception', 'Teacher Added Successfully!!');
        return Redirect::to('/allteacher');

        DB::table('teachers_tbl')->insert($data);
        Session::put("exception', 'Teacher Added Successfully!!");
        return view('./allteacher');
    }
    // Teacher delete method
    public function studentdelete($teacher_id)
    {
        DB::table('teachers_tbl')->where('teacher_id', $teacher_id)->delete();

        return Redirect::to('/allteacher');
    }
    // Teacher dashboard
    public function teacher_dashboard()
    {
        return view('teacher.teacher_dashboard');
    }
    // Teacher Login
    public function teacher_login_dashboard(Request $request)
    {
        $teacher_id = $request->teacher_id;
        $password = md5($request->teacher_password);
        $result = DB::table('teachers_tbl')
            ->where('teacher_id', $teacher_id)
            ->where('teacher_password', $password)
            ->first();

        // print_r ($result);
        if ($result) {
            Session::put('teacher_id', $result->teacher_id);
            Session::put('teacher_password', $result->teacher_password);
            return Redirect::to("/teacher_dashboard");
            // echo "Welcome";
        } else {
            Session::put('exception', 'Student ID or Password Invalid');
            return Redirect::to('/teacher_login');
        }
    }
    // Teacher Logout
    public function teacher_logout()
    {
        Session::put('teacher_id', null);
        Session::put('teacher_password', null);
        return Redirect::to("/teacher_login");
    }
    // Tacher Profile
    public function teacher_profile()
    {
        $teacher_id = Session::get('teacher_id');
        $teacher_profile = DB::table('teachers_tbl')->select('*')->where('teacher_id', $teacher_id)->first();

        $student_description_view = view('teacher.teacher_profile')->with('student_description_profile', $teacher_profile);
        return view('teacher.teacher_layout')->with('view', $student_description_view);
        // echo "</pre>";
        // print_r($studnet_profile);
        // echo "</pre>";
        // return view('admin.studentview');

    }

    // Teacher Setting
    public function teacher_setting()
    {

        $teacher_id = Session::get('teacher_id');
        $student_description_view = DB::table('teachers_tbl')->select('*')->where('teacher_id', $teacher_id)->first();

        $student_description_view = view('teacher.teacher_setting')->with('student_description_view', $student_description_view);
        return view('teacher.teacher_layout')->with('teacher_setting', $student_description_view);
        // return view('student.student_setting');
        // echo "</pre>";
        // print_r($student_description_view);
        // echo "</pre>";
        return view('/teacher.teacher_setting');
    }
    // student_own_update
    public function teacher_own_update(Request $request)
    {
        $teacher_id = Session::get('teacher_id');
        $date = array();
        $date['teacher_phone'] = $request->teacher_phone;
        $date['teacher_address'] = $request->teacher_address;
        $date['teacher_password'] = md5($request->teacher_password);

        DB::table('teachers_tbl')->where('teacher_id', $teacher_id)->update($date);

        Session::put('exception', 'Update successfully');
        return Redirect::to('/teacher_setting');
        // echo "</pre>";
        // print_r($student_id);
        // echo "</pre>";
    }
}
