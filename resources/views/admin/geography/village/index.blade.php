@section('geography-active', 'active')
@section('village', 'active')
@section('geography', 'show')
@extends('layouts.backend.app',[
    'title' => 'List Village',
    'pageTitle' => 'List Village',
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
                <a href="/village/create" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add Village</a>
            </h6>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="font-size: 11px;" class="text-primary">
                    <tr>
                        <th>No</th>
                        <th>Commune Code</th>
                        <th>Code</th>
                        <th>Khmer</th>
                        <th>English</th>
                        <th>Reference</th>
                        <th>Official Note</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($village as $row)
                        <tr style="font-size: 12px;color: black;">
                        <th scope="row"  width="1%">{{$loop->iteration}}</th>
                        <td>{{$row->commune_code}}</td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->khmer}}</td>
                        <td>{{$row->english}}</td>
                        <td>{{$row->reference}}</td>
                        <td>{{$row->official_note}}</td>
                        <td width="80px" style="text-align: center">
                            <div class="btn-group">
                                <a href="/village/{{$row->id}}/view" class="btn-primary btn-sm mr-1"><i class="fas fa-eye"></i></a>
                                <a href="/village/{{$row->id}}/edit" class="btn-primary btn-sm mr-1"><i class="fas fa-edit"></i></a>
                                <a href="/village/{{$row->id}}/question" class=" btn-danger btn-sm mr-1"><i class="fas fa-trash"></i></a>
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

