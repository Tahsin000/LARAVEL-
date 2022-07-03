<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();

class AdminController extends Controller
{   
    
    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }
    
// Student_dashboard
    public function student_dashboard()
    {
        return view('student.student_dashboard');
    }
// Admin_own_update
    public function admin_own_update(Request $request)
    {
        $admin_email = Session::get('admin_email'); 
        $date = array();
        $date['admin_name'] = $request->admin_name;
        $date['admin_phone'] = $request->admin_phone;
        $date['admin_password'] = md5($request->admin_password);

        DB::table('admin_tbl')->where('admin_email', $admin_email)->update($date);

        Session::put('exception', 'Admin update successfully');
        return Redirect::to('/setting');
        // echo "</pre>";
        // print_r($student_id);
        // echo "</pre>";
    }
// Setting 
    public function setting()
    {
        $admin_email = Session::get('admin_email');
        $admin_setting = DB::table('admin_tbl')->select('*')->where('admin_email', $admin_email)->first();
        
        $admin_setting = view('admin.Setting')->with('admin_setting', $admin_setting);
        return view('admin.layout')->with('admin_setting', $admin_setting);
        // return view('student.student_setting');
        // echo "</pre>";
        // print_r($student_description_view);
        // echo "</pre>";
        return view ('/admin.setting');
    }

    // View Profile
    public function profile()
    {
        $admin_email = Session::get('admin_email');
        $admin_profile = DB::table('admin_tbl')->select('*')->where('admin_email', $admin_email)->first();
        // print_r ($admin_profile);
        $admin_info = view('admin.profile')->with('admin_profile_info', $admin_profile);
        return view('admin.layout')->with('view', $admin_info);
    }

    // Logout function
    public function logout ()
    {
        Session::put ('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to("/backend");
    }
    public function login_dashboard(Request $request)
    {
        // return view('admin.dashboard');
        $email = $request->admin_email;
        $password = md5($request->admin_password);
        $result = DB::table('admin_tbl')
        ->where('admin_email', $email)
        ->where('admin_password', $password)
        ->first();
        if ($result) 
        {
            Session::put ('admin_email', $result->admin_email);
            Session::put('admin_password', $result->admin_password);
            return Redirect::to("/admin_dashboard");
            // echo "Welcome";
        }
        else
        {
            Session::put('exception','Email or Password Invalid');
            return Redirect::to('/backend');
        } 

    }
//Student dashboard
    public function student_login_dashboard(Request $request)
    {
        $student_id = $request->student_id;
        $password = md5($request->student_password);
        $result = DB::table('student_tbl')
        ->where('student_id', $student_id)
        ->where('student_password', $password)
        ->first();
        if ($result) 
        {
            Session::put ('student_id', $result->student_id);
            Session::put('student_password', $result->student_password);
            return Redirect::to("/student_dashboard");
            // echo "Welcome";
        }
        else
        {
            Session::put('exception','Student ID or Password Invalid');
            return Redirect::to('/');
        } 
    }
// Student Logout
    public function student_logout ()
    {
        Session::put ('student_id', null);
        Session::put('student_password', null);
        return Redirect::to("/");
    }
// Student Setting
    public function student_setting()
    {
        
        $student_id = Session::get('student_id');
        $student_description_view = DB::table('student_tbl')->select('*')->where('student_id', $student_id)->first();
        
        $student_description_view = view('student.student_setting')->with('student_description_view', $student_description_view);
        return view('student.student_layout')->with('student_setting', $student_description_view);
        // return view('student.student_setting');
        // echo "</pre>";
        // print_r($student_description_view);
        // echo "</pre>";
        return view ('/student.student_setting');
    }
// Student Profile
    public function student_profile()
    {
        $student_id = Session::get('student_id');
        $studnet_profile = DB::table('student_tbl')->select('*')->where('student_id', $student_id)->first();
        
        $student_description_view = view('student.student_profile')->with('student_description_profile', $studnet_profile);
        return view('student.student_layout')->with('view', $student_description_view);
        // echo "</pre>";
        // print_r($studnet_profile);
        // echo "</pre>";
        // return view('admin.studentview');

    }

}
