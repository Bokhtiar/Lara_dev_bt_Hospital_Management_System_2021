@extends('layouts.admin.app')
@section('title', 'Doctor' )
@section('admin_content')
<x-breadcrumb data="Doctor Create" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> CREATE DOCTOR </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('doctor.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF DOCTOR</a>
                    <a href="@route('doctor.create')" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE
                        DOCTOR</a>
                </p>
            </div>
        </div>
    </div>
</div>
<x-errors />
<x-alert />

<section class="card">
    <div class="card-header">
        <div class="card-body">
            <form action="" class="form-group">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <h3>Create About Doctor</h3><hr>
                        <div class="form-group">
                            <label for="">Doctor Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="doctor_name" value="{{ @$edit->doctor_name }}" placeholder="Doctor Name" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Doctor Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="doctor_image">
                        </div>
                        <div class="form-group">
                            <label for="">Doctor Designation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="doctor_designation" value="{{ @$edit->doctor_designation }}" placeholder="Doctor Designation" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Doctor Details <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="doctor_details" id="" cols="10" rows="3">{{ @$edit->doctor_details }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <h3>Create Doctor Social Links</h3><hr>
                        <div class="form-group">
                            <label for="">Doctor Facebook </label>
                            <input type="text" class="form-control" name="doctor_facebook" value="{{ @$edit->doctor_facebook }}" placeholder="Doctor Facebook" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Doctor Twitter </label>
                            <input type="text" class="form-control" name="dcotor_twitter" value="{{ @$edit->dcotor_twitter }}" placeholder="Doctor Twitter" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Doctor Istagram </label>
                            <input type="text" class="form-control" name="doctor_istagram" value="{{ @$edit->doctor_istagram }}" placeholder="Doctor Instagram" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create New Dcotor" class="btn btn-primary" id="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
