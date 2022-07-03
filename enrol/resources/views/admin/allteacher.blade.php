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
                    <th>Teacher ID #</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Department</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_teacher_info as $v_teacher)
                    <tr>
                        <td>{{$v_teacher->teacher_id}}</td>
                        <td>{{$v_teacher->teacher_name}}</td>
                        <td>{{$v_teacher->teacher_email}}</td>
                        <td> <img src="{{URL::to($v_teacher->teacher_image)}}" height="50" width="50" style="border-radius: 50%;"></td>
                        <td>{{$v_teacher->teacher_phone}}</td>
                        <td>{{$v_teacher->teacher_address}}</td>
                        <td>
                            @if ($v_teacher->teacher_department == 1)
                                <span class="label label-success">{{'CSE'}}</span>
                            @elseif($v_teacher->teacher_department == 2)
                                <span class="label label-success">{{'EEE'}}</span>
                            @elseif($v_teacher->teacher_department == 3)
                                <span class="label label-success">{{'ETE'}}</span>
                            @elseif($v_teacher->teacher_department == 4)
                                <span class="label label-success">{{'CCE'}}</span>
                            @elseif($v_teacher->teacher_department == 5)
                                <span class="label label-success">{{'CE'}}</span>
                            @endif
                        </td>
                        <td>
                        <a href="{{URL::to('/teacher_delete/'.$v_teacher->teacher_id)}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>
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