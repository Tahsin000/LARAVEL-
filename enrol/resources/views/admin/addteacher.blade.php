@extends('admin.layout')
@section('content')

    <div class="col-12 col-lg-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add Teacher</h2>

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

                <form class="forms-sample" action="{{url('/saveteacher')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control p-input" aria-describedby="emailHelp" placeholder="Enter Teacher Name" name="teacher_name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Set Teacher ID</label>
                        <input type="text" class="form-control p-input" aria-describedby="emailHelp" placeholder="Enter Set Teacher ID (unique)" name="teacher_id">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control p-input" name="teacher_email" placeholder="Enter Teacher Email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control p-input" name="teacher_phone" placeholder="Enter Teacher Phone">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" class="form-control p-input" name="teacher_address" placeholder="Enter Teacher Addres">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="teacher_password" placeholder="Enter Teacher Addres">
                    </div>

                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="row">
                        <div class="col-12">
                            <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                            <input type="file" name="teacher_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Files above 210 kb will not be supported</small>
                        </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Teacher Department</label>
                        <select class="form-control p-input" name="teacher_department">
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