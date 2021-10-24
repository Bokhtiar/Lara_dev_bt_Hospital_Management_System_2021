@extends('layouts.user.app')
@section('user_content')

    <section class="container my-3">
    <div class="text-center">
        <h4>Our Services</h4>
        <hr />
        <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when
        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
        letters,
        </p>
    </div>

    <div class="row">
        @foreach ($services as $item)
        <div class=" col-sm-12 col-md-4 col-lg-4 my-2 ">
            <div class="shadow-div text-center info-h my-4 ">
                <div class="">
                    @php
                    $image=json_decode(@$item->service_image);
                    @endphp
                    @if($image)
                    <img class="img-circle my-2" src="{{asset($image[0])}}" height="60px" width="60px" alt="" />
                    @else
                    @endif

                    <p class="text-center info-color my-4">
                    <span class="h4">{{ $item->service_name }} </span><br />
                    <span>{{ $item->service_short_description }}
                    </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    </section>
    <!-- End Services Section -->


@endsection
