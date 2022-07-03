@extends('admin.layout')
@section('content')

    <div class="col-12 col-lg-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add Student</h2>

                <!-- exception msg -->
                <p class="alert-success">
                    <?php
                    $exception = Session::get('exception');
                    if ($exception)
                    {
                        echo $exception;
                        Session::put('exception', null);
                    }
                    ?>
                </p>

                <form class="forms-sample" action="{{URL::to('/update_student', $student_description_profile->student_id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="emailHelp" placeholder="Enter Student Name" name="student_name" 
                        value="{{$student_description_profile->student_name}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Father name</label>
                        <input type="text" class="form-control p-input" name="student_fathername" placeholder="Enter Student Fathername" value="{{$student_description_profile->student_fathername}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mother Name</label>
                        <input type="text" class="form-control p-input" name="student_mothername" placeholder="Enter Student Mothername" value="{{$student_description_profile->student_mothername}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student Email" value="{{$student_description_profile->student_email}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone" value="{{$student_description_profile->student_phone}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control p-input" name="student_address" placeholder="Enter Student Address" value="{{$student_description_profile->student_address}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Student Password" value="{{$student_description_profile->student_password}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Admission Year</label>
                        <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Admission Year" value="{{$student_description_profile->student_admissionyear}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                        <select class="form-control p-input" name="student_department" value="{{$student_description_profile->student_department}}">
                            
                            @if ($student_description_profile->student_department == 1){
                                <option selected value="1">CSE</option> <option value="2">EEE</option> <option value="3">ETE</option> <option value="4">CCE</option> <option value="5">CE</option>
                            }
                            @elseif($student_description_profile->student_department == 2){
                                <option selected value="1">CSE</option> <option selected value="2">EEE</option> <option value="3">ETE</option> <option value="4">CCE</option> <option value="5">CE</option>
                            }
                            @elseif($student_description_profile->student_department == 3){
                                <option selected value="1">CSE</option> <option value="2">EEE</option> <option selected value="3">ETE</option> <option value="4">CCE</option> <option value="5">CE</option>
                            }
                            @elseif($student_description_profile->student_department == 4){
                                <option selected value="1">CSE</option> <option value="2">EEE</option> <option value="3">ETE</option> <option selected value="4">CCE</option> <option value="5">CE</option>
                            }
                            @elseif($student_description_profile->student_department == 5){
                                <option selected value="1">CSE</option> <option value="2">EEE</option> <option value="3">ETE</option> <option value="4">CCE</option> <option selected value="5">CE</option>
                            }
                            @endif
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection