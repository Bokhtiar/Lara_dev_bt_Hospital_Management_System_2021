<section>
    <!--first header navbar start here-->
    <section class="">
      <nav class="first-nav navbar navbar-expand-lg navbar-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <span class="" href="#"><i class="far fa-envelope"></i> test@gmail.com</span>&nbsp;&nbsp;
          <span class="" href="#"><i class="fas fa-mobile-alt"></i> +880 1638103321</span>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
              </li>

              <li class="nav-item"></li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-dribbble"></i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram-square"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!--first header navbar end here-->

    <!--secound header navbar start here-->
    <section>
      <nav class="navbar  container navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Patient and Doctors Help Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="@route('about')">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="@route('services')">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="@route('departments')">Departments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="@route('doctors')">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="@route('user_appointment.index')">Appointment Status</a>
              </li>
            <li class="nav-item">
              <a class="
                    nav-link
                    appointment
                    btn btn-outline-primary
                    text-dark
                  " href="http://localhost:8000/#appointment">Make an Appointment</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <!--secound header navbar end here-->
  </section>
