@section('geography-active', 'active')
@section('communes', 'active')
@section('geography', 'show')
@extends('layouts.backend.app',[
    'title' => 'Edit Communes',
    'pageTitle' => 'Edit Communes',
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
                <a href="/communes" class="btn btn-primary btn-sm"> Back</a>
            </h6>
        </h6>
    </div>
    <form action="/communes/{{$Communes->id}}/update"  method="POST" enctype="multipart/form-data">
        @csrf
    <div class="card-body">
            <div class="row col-md-12">

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="district_code">District Code </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="district_code" name="district_code" value="{{old('district_code') ? old('district_code') : $Communes->district_code}}">
                        @error('district_code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="code">Code </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="code" name="code" value="{{old('code') ? old('code') : $Communes->code}}">
                        @error('code')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="type">Type </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="type" name="type" value="{{old('type') ? old('type') : $Communes->type}}">
                        @error('type')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
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
                        <input type="text" class="form-control" id="khmer" name="khmer" value="{{old('khmer') ? old('khmer') : $Communes->khmer}}">
                        @error('khmer')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
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
                        <input type="text" class="form-control" id="english" name="english" value="{{old('english') ? old('english') : $Communes->english}}">
                        @error('english')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="village">Village </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="village" name="village" value="{{old('village') ? old('village') : $Communes->village}}">
                        @error('village')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="reference">Reference </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="reference" name="reference" value="{{old('reference') ? old('reference') : $Communes->reference}}">
                        @error('reference')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="official_note">Official Note </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="official_note" name="official_note" value="{{old('official_note') ? old('official_note') : $Communes->official_note}}">
                        @error('official_note')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="note_by_checker">Note By Checker </label>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <input type="text" class="form-control" id="note_by_checker" name="note_by_checker"  value="{{old('note_by_checker') ? old('note_by_checker') : $Communes->note_by_checker}}">
                        @error('note_by_checker')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

            </div>
        <div class="card-footer">
            <div class="row col-md-12">
                <div class="col-md-2">
                    <div class="form-group">
                        {{-- <label for="note_by_checker">Note By Checker </label> --}}
                    </div>
                </div>
                <div class="col-md-10">
                        <button type="submit" class="btn btn-primary btn-sm">Edit Communes</button>
                        <a href="/communes" class="btn btn-secondary btn-sm">Cancel</a>
                </div>
               
            </div>
        </div>
    </form>
    </div>
</div>
@stop

