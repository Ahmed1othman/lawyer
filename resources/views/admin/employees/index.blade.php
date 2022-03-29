@extends('layouts.admin.master')
@section('title')
{{trans('admin/employees.employees')}}
@endsection
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        @include('message')
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <a href="{{route('employees.create')}}"
                            class="btn btn-success">{{trans('admin/employees.Add_new_employee')}}</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{trans('admin/employees.title')}}</th>
                                <th>{{trans('admin/employees.active')}}</th>
                                <th>{{trans('admin/employees.photo')}}</th>
                                <th>{{trans('admin/employees.Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr id="row_{{$row->id}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->title}}</td>
                                <td>{!! $row->active==1?'<i class="bx bx-check-circle text-success"
                                        aria-hidden="true"></i>':'<i class="bx bx-error text-danger"
                                        aria-hidden="true"></i>'!!}</td>
                                <td>
                                    @if ($row->image)
                                    <a href="{{asset($row->image)}}" data-fancybox="group2">
                                        <img width="75px" height="75px" src="{{asset($row->image)}}"
                                            alt="{{$row->title}}" class="">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('employees.edit',$row->id)}}" class="btn btn-success btn-sm"><i
                                            class='bx bx-edit'></i></a>
                                    <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                        onclick="delete_alert({{$row->id}},'employees')"><i
                                            class="bx bx-trash"></i></button>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
