@extends('layouts.user.app')
@section('user_content')


      <main>
          <div class="about">
              <div class="title">
                  <h1>About The Hospital</h1>
              </div>
              <div class="desc">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores modi vel blanditiis doloribus commodi impedit!. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
          </div>
          <div class="row">
              <div class="card">
                  <div class="card_img"> <img class="card_img" src="{{ asset('user') }}/images/doctor2.jpg"  alt=""> </div>
                  <div class="card_title">Continuing Healthcare </div>
                  <div class="card_body">
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                  </div>
              </div>

              <div class="card">
                <div class="card_img"> <img class="card_img" src="{{ asset('user') }}/images/doctor4.jpg"  alt=""> </div>
                <div class="card_title">Continuing Healthcare</div>
                <div class="card_body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="card">
              <div class="card_img"> <img class="card_img" src="{{ asset('user') }}/images/doctor1.jpg"  alt=""> </div>
              <div class="card_title">Continuing Healthcare</div>
              <div class="card_body">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
              </div>
          </div>

          </div>
      </main>
      <!--about us end-->


      <!--service add start-->
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
