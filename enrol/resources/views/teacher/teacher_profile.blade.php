@extends('teacher.teacher_layout')
@php
    function convert_deparment($value){
        $values=[
            1=>'CSE',
            2=>'EEE',
            3=>'ETE',
            4=>'CCE',
            5=>'CE',
        ];
        return $values[$value];
    }
@endphp
@section('content')
<div class="row user-profile">
    <div class="col-lg-12 side-left">
        <div class="card mb-4">
        <div class="card-body avatar">
            <h2 class="card-title">Info</h2>
            <img src="{{URL::to($student_description_profile->teacher_image)}}" height="50" width="50" style="border-radius: 50%;">
            <p class="name">{{strtoupper($student_description_profile->teacher_name)}}</p>
            <p class="designation">{{$student_description_profile->teacher_id}}</p>
            
            <a class="email" href="#">{{$student_description_profile->teacher_email}}</a>
            <a class="number" href="#">{{$student_description_profile->teacher_phone}}</a>
        </div>
        </div>
        <div class="card mb-4">
        <div class="card-body overview">
            <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The total information of this student are given below.</p>
            </div>
            <!-- this class is Teacher Address  -->    
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Address : </label>
                    <span>{{$student_description_profile->teacher_address}}</span>
                </a>
            </div>
            <!-- this class is student_department  -->    
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Department : </label>
                    <span>{{convert_deparment($student_description_profile->teacher_department)}}</span>
                </a>
            </div>
            
        </div>
        </div>
    </div>
</div>
@endsection