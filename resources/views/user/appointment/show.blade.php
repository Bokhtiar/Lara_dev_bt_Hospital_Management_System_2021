@extends('layouts.user.app')
@section('user_content')
    <section class="container">

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
                                        
                                        <span>links : {{ $reply->link }}</span> <br>
                                        <span>Note: {{ $reply->note }}</span>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

    </section>
@endsection
