@extends('layouts.admin.app')
@section('title', 'Doctor Details')
@section('admin_content')
<x-breadcrumb data="Doctor Detail" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF DOCTOR </h3>
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
<section class="card">
    <div class="card-header">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    @php
                    $image=json_decode($doctor->doctor_image);
                    @endphp
                    @if($image)
                    <img src="{{asset($image[0])}}" height="250px" width="100%" alt="">
                    @endif
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <h3 class="text-center">More Information...</h3>
                    <div>
                        <h4>Doctor Abouts</h4>
                        <span>Doctor Name:</span> {{ $doctor->doctor_name }} <br>
                        <span>Doctor Designation:</span> {{ $doctor->doctor_designation }} <br>
                        <span>Doctor Details:</span> {{ $doctor->doctor_details }}
                    </div><br>
                    <div>
                        <h4>Doctor Social Links</h4>
                        <span>Doctor Facebook:</span> {{ $doctor->doctor_facebook }} <br>
                        <span>Doctor Twitter:</span> {{ $doctor->dcotor_twitter }} <br>
                        <span>Doctor Instagram:</span> {{ $doctor->doctor_istagram }}
                    </div>
                </div>
            </div>
        </div>
        <!--color list show -->
    </div>
    </div>

</section>

@endsection
