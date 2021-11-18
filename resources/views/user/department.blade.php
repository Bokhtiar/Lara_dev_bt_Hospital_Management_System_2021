@extends('layouts.user.app')
@section('user_content')

    <section class="container my-3">
    <div class="text-center">
        <h4>Our Departments</h4>
        <hr />
        <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when
        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
        letters,
        </p>
    </div>

    <div class="row">
        @foreach ($departments as $item)
        <div class=" col-sm-12 col-md-4 col-lg-4 my-2 ">
            <div class="shadow-div text-center info-h my-4 ">
                <div class="">
                    <p class="text-center info-color my-4">
                    <span class="h4 my-3">{{ $item->dep_name }} </span><br />
                    <span>{{ $item->dep_description }}
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
