@section('geography-active', 'active')
@section('district', 'active')
@section('geography', 'show')
@extends('layouts.backend.app',[
    'title' => 'List District',
    'pageTitle' => 'List District',
])
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
           <div id="map"></div>
        </div>
    </div>
</div>
@stop

