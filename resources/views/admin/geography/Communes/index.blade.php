@section('geography-active', 'active')
@section('communes', 'active')
@section('geography', 'show')
@extends('layouts.backend.app',[
    'title' => 'List Communes',
    'pageTitle' => 'List Communes',
])
<style>
    tbody tr td{
        padding: 0.4rem !important;
    }
</style>
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <h6 class="m-0 font-weight-bold text-primary">
                <a href="/communes/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Communes</a>
            </h6>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="font-size: 11px;" class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>District Code</th>
                        <th>Code</th>
                        <th>Type</th>
                        <th>Khmer</th>
                        <th>English</th>
                        <th>Village</th>
                        <th>Reference</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Communes as $row)
                        <tr style="font-size: 12px;color: black;">
                        <th scope="row"  width="1%">{{$loop->iteration}}</th>
                        <td>{{$row->district_code}}</td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->type}}</td>
                        <td>{{$row->khmer}}</td>
                        <td>{{$row->english}}</td>
                        <td>{{$row->village}}</td>
                        <td>{{$row->reference}}</td>
                        <td width="80px" style="text-align: center">
                            <div class="btn-group">
                                <a href="/communes/{{$row->id}}/view" class="btn-primary btn-sm mr-1"><i class="fas fa-eye"></i></a>
                                <a href="/communes/{{$row->id}}/edit" class="btn-primary btn-sm mr-1"><i class="fas fa-edit"></i></a>
                                <a href="/communes/{{$row->id}}/question" class=" btn-danger btn-sm mr-1"><i class="fas fa-trash"></i></a>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

