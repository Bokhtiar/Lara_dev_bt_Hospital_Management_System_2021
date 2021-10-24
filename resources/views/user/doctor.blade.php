@extends('layouts.user.app')
@section('user_content')
<!--doctors start here-->
<section class="container my-5">
<div class="text-center">
    <h3>Doctors</h3>
    <p class="">It is a long established fact that a reader will be distracted by the readable content of a page
    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
    of letters,</p>
    <hr />
</div>

<section class="">
    <div class="row">
        @foreach ($dcotors as $item)
        <div class="col-md-6 col-sm-12 col-lg-6 my-3">
            <div class="doctor container row my-3">
                <div class="col-md-4 my-3">
                @php
                $image=json_decode(@$item->doctor_image);
                @endphp
                @if($image)
                <img class="doctor-image" src="{{asset($image[0])}}"  alt="" />
                @else
                @endif
                </div>
                <div class="col-md-8 my-3">
                <div>
                    <h4>{{ $item->doctor_name }}</h4>
                    <span>{{ $item->doctor_designation }}</span>
                </div>
                <hr />
                <span> {{ $item->doctor_details }}</span>
                <p class="form-inline">
                    <a href="{{ $item->dcotor_twitter }}"><i class="fa fa-twitter"></i></a> &nbsp;
                    <a href="{{ $item->doctor_facebook }}"> <i class="fab fa-linkedin"></i></a>&nbsp;
                    <a href="{{ $item->doctor_istagram }}"><i class="fab fa-instagram-square"></i> </a>&nbsp;
                </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
</section>
<!--doctors end here-->

@endsection
