@extends('admin.layout')
@section('content')

<!-- admin_setting -->

<div class="col-12 col-lg-6 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Admin Profile</h2>

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

                <form class="forms-sample" action="{{URL::to('/admin_own_update')}}" method="POST">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control p-input" name="admin_name" placeholder="Enter Admin Phone" value="{{($admin_setting->admin_name)}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control p-input" name="admin_phone" placeholder="Enter Admin Address" value="{{($admin_setting->admin_phone)}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control p-input" name="admin_password" placeholder="Enter Admin Password" value="{{($admin_setting->admin_password)}}">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection