@extends('admin.layout')
@section('content')

<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Student</h2>
                  @php
                    $student_count=DB::table('student_tbl')->count('student_id');
                  @endphp
                  <h1 class="" style="text-align:center">{{$student_count}}</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teacher</h2>
                  @php
                    $teacher_count=DB::table('teachers_tbl')->count('teacher_id');
                  @endphp
                  <h1 class="" style="text-align:center">{{$teacher_count}}</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  @php
                    $amount=2075;
                  @endphp
                  <h2 class="card-title">Tution Fee</h2>
                  <h1 class="" style="text-align:center"><span>per credit: </span><span>{{$amount}} </span><span>Tk</span></h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                  <h1 class="" style="text-align:center">Revenue</h1>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
@endsection
