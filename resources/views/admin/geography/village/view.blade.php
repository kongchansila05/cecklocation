@section('geography-active', 'active')
@section('village', 'active')
@section('geography', 'show')
@extends('layouts.backend.app',[
    'title' => 'View Village',
    'pageTitle' => 'View Village',
])
<style>
    .form-group{
        text-align: right;
    }
    label {
        padding-top: 0.3rem;
    }
</style>
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <h6 class="m-0 font-weight-bold text-primary">
                <a href="/village" class="btn btn-primary btn-sm"> Back</a>
            </h6>
        </h6>
    </div>
    <div class="card-body">
            <div class="row col-md-12">

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="commune_code">Commune Code </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="commune_code" name="commune_code" value="{{old('commune_code') ? old('commune_code') : $village->commune_code}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="code">Code </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="code" name="code" value="{{old('code') ? old('code') : $village->code}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="khmer">Khmer </label>
                        <span class="text-danger" title="This field is required">*</span>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="khmer" name="khmer"value="{{old('khmer') ? old('khmer') : $village->khmer}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="english">English </label>
                        <span class="text-danger" title="This field is required">*</span>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="english" name="english" value="{{old('english') ? old('english') : $village->english}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="reference">Reference </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="reference" name="reference" value="{{old('reference') ? old('reference') : $village->reference}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="official_note">Official Note </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="official_note" name="official_note" value="{{old('official_note') ? old('official_note') : $village->official_note}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="note_by_checker">Note By Checker </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" readonly class="form-control" id="note_by_checker" name="note_by_checker" value="{{old('note_by_checker') ? old('note_by_checker') : $village->note_by_checker}}">
                    </div>
                </div>

            </div>
       
    </div>
</div>
@stop

