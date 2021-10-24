<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="@route('about')">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="@route('services')">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
                @foreach (App\Models\Service::all() as $item)
                <li><i class="bx bx-chevron-right"></i> {{ $item->service_name }}</li>
                @endforeach
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p> Tangail <br> Dhaka, NY 535022<br> Bangladesh <br><br> <strong>Phone:</strong> +880 1638107361<br>
              <strong>Email:</strong> info@example.com<br> </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Us</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies
              darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3"> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> <a
                href="#" class="facebook"><i class="fa fa-dribbble"></i></a> <a href="#" class="instagram"><i
                  class="fab fa-instagram-square"></i></a> </div>
          </div>
        </div>
      </div>
    </div>

  </footer>
