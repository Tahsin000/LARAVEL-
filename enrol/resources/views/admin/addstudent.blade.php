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

                <form class="forms-sample" action="{{url('/savestudent')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Student Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="emailHelp" placeholder="Enter Student Name" name="student_name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Fathername</label>
                        <input type="text" class="form-control p-input" name="student_fathername" placeholder="Enter Student Fathername">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Mothername</label>
                        <input type="text" class="form-control p-input" name="student_mothername" placeholder="Enter Student Mothername">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Student Email</label>
                        <input type="email" class="form-control p-input" name="student_email" placeholder="Enter Student Email">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control p-input" name="student_address" placeholder="Enter Student Address">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Set Student ID</label>
                        <input type="text" class="form-control p-input" aria-describedby="emailHelp" placeholder="Enter Set Student ID (unique)" name="student_id">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Student Password">
                    </div>

                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="row">
                        <div class="col-12">
                            <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                            <input type="file" name="student_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Files above 210 kb will not be supported</small>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Admission Year</label>
                        <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Enter Admission Year">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Department</label>
                        <select class="form-control p-input" name="student_department">
                            <option value="1" >CSE</option>
                            <option value="2" >EEE</option>
                            <option value="3" >ETE</option>
                            <option value="4" >CCE</option>
                            <option value="5" >CE</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection