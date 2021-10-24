  @extends('layouts.user.app')
  @section('user_content')
    <x-errors/>
    <x-alert/>
  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{ asset('user') }}/images/slider1.jpg" height="450px" alt="..." />
          <div class="carousel-caption mb-4 p-5">
            <h1 style="color: #1f34b1">Heading.......</h1>
            <p class="lead" style="color: black">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s,
            </p>
            <a class="appointment btn btn-outline-primary text-dark" href="#appointment">Make an Appointment</a>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('user') }}/images/slider2.jpg" height="450px" alt="..." />
          <div class="carousel-caption mb-4 p-5">
            <h1 style="color: #1f34b1">Heading.......</h1>
            <p class="lead" style="color: black">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s,
            </p>
            <a class="appointment btn btn-outline-primary text-dark" href="#appointment">Make an Appointment</a>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{ asset('user') }}/images/slider3.jpg" height="450px" alt="..." />
          <div class="carousel-caption mb-4 p-5">
            <h1 style="color: #1f34b1">Heading.......</h1>
            <p class="lead" style="color: black">
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s,
            </p>
            <a class="appointment btn btn-outline-primary text-dark" href="#appointment">Make an Appointment</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!--slider end here-->

  <!--information section start-->
  <section class="info">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-lg-3 my-3">
          <div class="text-center info-h">
            <img class="img-circle" src="{{ asset('user') }}/images/doctor1.jpg" height="40px" width="40px" alt="" />
            <p class="text-center info-color pt-4">
              <span>Doctors</span><br />
              <span class="h3">430</span>
            </p>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-lg-3 my-3">
          <div class="text-center info-h">
            <img class="img-circle" src="{{ asset('user') }}/images/dep.jpg" height="40px" width="40px" alt="" />
            <p class="text-center info-color pt-4">
              <span>Departments</span><br />
              <span class="h3"> 100</span>
            </p>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-lg-3 my-3">
          <div class="text-center info-h">
            <img class="img-circle" src="{{ asset('user') }}/images/lab.jpg" height="40px" width="40px" alt="" />
            <p class="text-center info-color pt-4">
              <span>Research Labs</span><br />
              <span class="h3">240</span>
            </p>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-lg-3 my-3">
          <div class="text-center info-h">
            <img class="img-circle" src="{{ asset('user') }}/images/aw.jpg" height="40px" width="40px" alt="" />
            <p class="text-center info-color pt-4">
              <span>Awards</span><br />
              <span class="h3">120</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--information section end-->

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
  <!--appointment start-->
  <section id="appointment">
    <div class="container px-1 px-md-4 py-5 mx-auto">
    <form action="@route('user_appointment.store')" method="POST">
        @csrf
      <div class="">
        <div class="">
          <div class="card ">
            <div class="row">
              <div class="col-12">
                <div class="card card00 m-2 border-0">
                  <div class="row text-center justify-content-center px-3">

                    <p class="prev text-danger"><span class="fa fa-long-arrow-left"> Go Back</span></p id="back">
                    <h3 class="mt-4">Make an Appointment</h3>
                  </div>
                  <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                    <div class="col-md-6">
                      <div class="card1">
                        <ul id="progressbar" class="text-center">
                          <li class="active step0"></li>
                          <li class="step0"></li>
                          <li class="step0"></li>
                          <li class="step0"></li>
                        </ul>
                        <h6 class="mb-5">Personal Info.</h6>
                        <h6 class="mb-5">Choice Doctor.</h6>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card2 first-screen show ml-2">
                        <div class="row text-center px-3 mr-2">
                          <div class="mb-2 col-2"> <span class="fa fa-reddit social"></span> </div>
                          <div class="mb-2 col-2"> <span class="fa fa-facebook social"></span> </div>
                          <div class="mb-2 col-2"> <span class="fa fa-linkedin social"></span> </div>
                          <div class="mb-2 col-2"> <span class="fa fa-google-plus social"></span> </div>
                          <div class="mb-2 col-2"> <span class="fa fa-twitter social"></span> </div>
                          <div class="mb-2 col-2"> <span class="fa fa-dropbox social"></span> </div>
                        </div>
                        <div class="row px-3 mt-4">
                          <div class="form-group mt-1 mb-1">
                            <label class="ml-3" for="email">Full Name</label>
                            <input type="text" name="name" id="email" class="form-control" placeholder="Full Name" required>
                            <label class="ml-3" for="email">Phone</label>
                            <input type="text" name="phone" id="email" class="form-control" placeholder="Phone" required>
                            <label class="ml-3" for="email">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="E-mail" required>
                            <label class="ml-3" for="email">Age</label>
                            <input type="text" id="email" name="age" class="form-control" placeholder="Age" required>
                          </div>
                          <div class="next-button text-center mt-1 ml-2"> <span class=" fa fa-arrow-right"></span>
                          </div>
                        </div>
                        <div class="mb-3">

                        </div>

                      </div>
                      <div class="card2 ml-2">
                        <div class="row px-3 mt-3">
                          <div class="form-group mt-1 mb-1">
                            <label class="ml-3" for="pwd">Choice Doctors</label>

                            <select name="doctor_id" class="form-control">
                              <option>Select Doctor</option>
                              @foreach ($doctors as $item)
                                <option value="{{ $item->id }}">{{ $item->doctor_name }}</option>
                              @endforeach

                            </select>

                            <label class="ml-3" for="email">Date</label>
                            <input type="date" name="date" id="date" class="form-control" placeholder="Date" required>
                            <label class="ml-3" for="time">Time</label>
                            <input type="time" name="time" id="time" class="form-control" placeholder="time" required>
                          </div>
                          <div class="next-button text-center mt-1 ml-2"> <span class="fa fa-arrow-right"></span>
                          </div>
                        </div>

                      </div>
                      <div class="card2 ml-2">
                        <div class="row px-3 mt-3">

                          <div class="form-group mt-3 mb-4">
                            <label for="">Notes</label>
                            <textarea name="note" class="form-control" id="" cols="30" rows="10"></textarea>
                          </div>
                          <div class="next-button text-center mt-3 ml-2"> <span class="fa fa-arrow-right"></span>
                          </div>
                        </div>
                      </div>
                      <div class="card2 ml-2">
                        <div class="row px-3 mt-5 mb-5 text-center">
                          <h2 class="col-12 text-danger mt-4"><strong>Success !</strong></h2>
                          <div class="col-12 text-center"><img class="tick" src="{{ asset('user') }}/images/doctor4.jpg"></div>
                          <h6 class="col-12 mt-2"><i>...Safe Life...</i></h6>
                          @auth
                          <input type="submit" class="btn btn-outline-primary" value="Make Appointment" id="">
                          @endauth
                          <h6 class="col-12 mt-2"><i>First Login Then Create Make Appointment</i></h6>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
  </section>
  <!--appointment end-->
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
        @foreach ($doctors as $item)
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
  <!--blog section-->
  <div class="  container mt-5">
    <div class="">
      <h3>Blog Section</h3>
      <hr>
    </div>
    <div class="row">

      <div class="col-md-4 col-sm-12 col-lg-4 my-2">
        <figure class="snip1527">
          <div class="image"><img height="310px" src="{{ asset('user') }}/images/doctor1.jpg" alt="pr-sample23" /></div>
          <figcaption>
            <div class="date"><span class="day">28</span><span class="month">Nov</span></div>
            <h3>
              Acer Aspire 7 Gaming Laptop</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. </p>
          </figcaption> <a href="#"></a>
        </figure>
      </div>


      <div class="col-md-4 col-sm-12 col-lg-4 my-2">
        <figure class="snip1527 hover">
          <div class="image"><img height="310px" src="{{ asset('user') }}/images/doctor2.jpg" alt="pr-sample24" /></div>
          <figcaption>
            <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
            <h3>
              RedmiBook, Mi Laptops Launch</h3>
            <p> laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse </p>
          </figcaption> <a href="#"></a>
        </figure>
      </div>


      <div class="col-md-4 col-sm-12 col-lg-4 my-2">
        <figure class="snip1527">
          <div class="image"><img height="310px" src="{{ asset('user') }}/images/doctor3.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
            <h3>Google May Face Antitrust Case</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
              est laborum. </p>
          </figcaption> <a href="#"></a>
        </figure>
      </div>

      <div class="col-md-4 col-sm-12 col-lg-4 my-2">
        <figure class="snip1527">
          <div class="image"><img height="310px" src="{{ asset('user') }}/images/doctor4.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
            <h3>Google May Face Antitrust Case</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
              est laborum. </p>
          </figcaption> <a href="#"></a>
        </figure>
      </div>


      <div class="col-md-4 col-sm-12 col-lg-4 my-2">
        <figure class="snip1527">
          <div class="image"><img height="310px" src="{{ asset('user') }}/images/doctor1.jpg" alt="pr-sample25" /></div>
          <figcaption>
            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
            <h3>Google May Face Antitrust Case</h3>
            <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
              est laborum. </p>
          </figcaption> <a href="#"></a>
        </figure>
      </div>
    </div>
  </div>
  <!--end of blog section-->
@endsection
