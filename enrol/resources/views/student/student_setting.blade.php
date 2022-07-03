@extends('student.student_layout')
@section('content')

    <div class="col-12 col-lg-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Update Your Profile</h2>

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

                <form class="forms-sample" action="{{URL::to('/student_own_update')}}" method="POST">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control p-input" name="student_phone" placeholder="Enter Student Phone" value="{{($student_description_view->student_phone)}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control p-input" name="student_address" placeholder="Enter Student Address" value="{{($student_description_view->student_address)}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="student_password" placeholder="Enter Student Password" value="{{($student_description_view->student_password)}}">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection