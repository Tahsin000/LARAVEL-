@extends('student.student_layout')
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
            <img src="{{URL::to($student_description_profile->student_image)}}" height="50" width="50" style="border-radius: 50%;">
            <p class="name">{{strtoupper($student_description_profile->student_name)}}</p>
            <p class="designation">{{$student_description_profile->student_id}}</p>
            
            <a class="email" href="#">{{$student_description_profile->student_email}}</a>
            <a class="number" href="#">{{$student_description_profile->student_phone}}</a>
        </div>
        </div>
        <div class="card mb-4">
        <div class="card-body overview">
            <ul class="achivements">
            <li><p>34</p><p>Projects</p></li>
            <li><p>23</p><p>Task</p></li>
            <li><p>29</p><p>Completed</p></li>
            </ul>
            <div class="wrapper about-user">
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>The total information of this student are given below.</p>
            </div>
            <!-- this class is student_fathername -->
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Father Name : </label>
                    <span>{{$student_description_profile->student_fathername}}</span>
                </a>
            </div>
            <!-- this class is student_mothername  -->
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Mother Name : </label>
                    <span>{{$student_description_profile->student_mothername}}</span>
                </a>
            </div>
            <!-- this class is student_address  -->    
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Address : </label>
                    <span>{{$student_description_profile->student_address}}</span>
                </a>
            </div>
            <!-- this class is student_department  -->    
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Department : </label>
                    <span>{{convert_deparment($student_description_profile->student_department)}}</span>
                </a>
            </div>
            <!-- this class is student_admissionyear  -->  
            <div class="info-links">
                <a class="website">
                    <label class="icon-globe icon">Admission Year : </label>
                    <span>{{$student_description_profile->student_admissionyear}}</span>
                </a>
            </div>
            
        </div>
        </div>
    </div>
</div>
@endsection