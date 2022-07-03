@extends('admin.layout')
@section('content')

<div class="card">
    <div class="card-body">
        <h2 class="card-title">Data table</h2>
        <div class="row">
        <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th>St_id #</th>
                    <th>student_name On</th>
                    <th>Phone</th>
                    <th>Image to</th>
                    <th>address</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cce_student_info as $v_student)
                    <tr>
                        <td>{{$v_student->student_id}}</td>
                        <td>{{$v_student->student_name}}</td>
                        <td>{{$v_student->student_phone}}</td>
                        <td> <img src="{{URL::to($v_student->student_image)}}" height="50" width="50" style="border-radius: 50%;"></td>
                        <td>{{$v_student->student_address}}</td>
                        <td>
                            @if ($v_student->student_department == 1)
                                <span class="label label-success">{{'CSE'}}</span>
                            @elseif($v_student->student_department == 2)
                                <span class="label label-success">{{'EEE'}}</span>
                            @elseif($v_student->student_department == 3)
                                <span class="label label-success">{{'ETE'}}</span>
                            @elseif($v_student->student_department == 4)
                                <span class="label label-success">{{'CCE'}}</span>
                            @elseif($v_student->student_department == 5)
                                <span class="label label-success">{{'CE'}}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{URL::to('/studen_view/'.$v_student->student_id)}}"><button class="btn btn-outline-primary">View</button></a> 
                            <a href="{{URL::to('/studen_edit/'.$v_student->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                            <a href="{{URL::to('/student_delete/'.$v_student->student_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection