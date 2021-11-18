@extends('layouts.admin.app')
@section('title', 'Appointments show')
@section('admin_content')
<x-breadcrumb data="Appointment show" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF APPOINTMENTS </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('appointment.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF APPOINTMENST</a>
                </p>
            </div>
        </div>
    </div>
</div>
<section class="card">
    <div class="card-header">
        <div class="card-body">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <h2 class="text-center bg-primary rounded">Appointment Details</h2>
                            <h5>personal info</h5>
                            <span>{{ $item->name }}</span><br>
                            <span>{{ $item->email }}</span><br>
                            <span>{{ $item->phone }}</span><br>
                            <span>{{ $item->age }}</span><br>
                            <h5>Doctor and Date & time</h5>
                            <span>{{ $item->doctor ? $item->doctor->doctor_name : 'not available data' }}</span><br>
                            <span>{{ $item->date }}</span><br>
                            <span>{{ $item->time }}</span><br>
                            <span>{{ $item->note }}</span><br>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <h2 class="text-center bg-primary rounded">Appointment Reply</h2>
                            <div>
                                <h4>Already Replyed</h4>
                                @if($reply == null)

                                @else
                                <span>links : {{ $reply->link }}</span> <br>
                                <span>Note: {{ $reply->note }}</span>
                                @endif
                            </div>
                            <hr>
                            <h4 class="text-center bg-primary rounded">Appointment Reply Form</h4>
                            <form method="POST" action="@route('appointment-reaply.store')">
                                @csrf
                                <input type="hidden" name="appointment_id" value="{{ $item->id }}" id="">
                                <div class="form-gorup">
                                    <label for="">Metting Links <span class="text-danger">*</span></label>
                                    <input placeholder="links" required type="text" name="link" class="form-control" id="">
                                </div>
                                <div class="form-gorup">
                                    <label for="">Notes <span class="text-danger">*</span></label>
                                    <textarea required name="note" class="form-control" id="" cols="15" rows="5"></textarea>
                                </div>
                                <div class="form-gorup mt-2 float-right">
                                    <input type="submit" class="btn btn-primary" name="" id="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--color list show -->
    </div>
    </div>

</section>

@endsection
