@extends('admin.layout')
@section('content')
<div class="row user-profile">
    <div class="col-lg-12 side-left">
        <div class="card mb-4">
        <div class="card-body avatar">
            <h2 class="card-title">Info</h2>
            <p class="name">{{strtoupper($admin_profile_info->admin_name)}}</p>
        </div>
        </div>
        <div class="card mb-4">
        <div class="card-body overview">
            <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The information of Admin</p>
            </div>
            <!-- this class is Admin ID  -->  
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">ID: </label>
                    <span>{{$admin_profile_info->admin_id }}</span>
                </a>
            </div>
            <!-- this class is Admin phone  -->  
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Phone: </label>
                    <span>{{$admin_profile_info->admin_phone}}</span>
                </a>
            </div>
            
        </div>
        </div>
    </div>
</div>

@endsection