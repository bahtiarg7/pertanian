@extends('frontend.layouts.app', [
    'title' => 'Contact',
])

@section('content')
    <!-- Page title + Сontact form -->
    <section class="container pt-5 pb-lg-2 pb-xl-4 py-xxl-5 my-5">

        <div class="row pb-1 pb-sm-3 pb-lg-4">
          <div class="col-lg-4 pe-xxl-4">

            <!-- Page title -->
            <h1 class="display-2">Contacts</h1>
            <p class="fs-lg pb-4 mb-0 mb-sm-2">Get in touch with us by completing the below form or call us now</p>
          </div>
          <div class="col-lg-8 col-xl-7 offset-xl-1">

            <!-- Contact form -->
            <form class="row g-4 needs-validation" novalidate>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="name">Name</label>
                <input class="form-control form-control-lg" type="text" placeholder="Your name" required id="name">
                <div class="invalid-feedback">Please enter your name!</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="email">Email</label>
                <input class="form-control form-control-lg" type="email" placeholder="Email address" required id="email">
                <div class="invalid-feedback">Please provide a valid email address!</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="phone">Phone</label>
                <input class="form-control form-control-lg" type="text" placeholder="Phone number" id="phone">
              </div>
              <div class="col-sm-6">
                <label class="form-label fs-base" for="location">Location</label>
                <select class="form-select form-select-lg" id="location">
                  <option value="All locations">All locations</option>
                  <option value="Asia and Pacific">Asia and Pacific</option>
                  <option value="Central Europe">Central Europe</option>
                  <option value="Eastern Europe">Eastern Europe</option>
                  <option value="North America">North America</option>
                  <option value="South America">South America</option>
                </select>
              </div>
              <div class="col-sm-12">
                <label class="form-label fs-base" for="message">How can we help?</label>
                <textarea class="form-control form-control-lg" rows="5" placeholder="Enter your message here..." required id="message"></textarea>
                <div class="invalid-feedback">Please enter your message!</div>
              </div>
              <div class="col-sm-12">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="agree">
                  <label class="form-check-label" for="agree">I agree to the <a class="nav-link d-inline fs-normal text-decoration-underline p-0" href="#">Terms &amp; Conditions</a></label>
                </div>
              </div>
              <div class="col-sm-12 pt-2">
                <button class="btn btn-lg btn-primary" type="submit">Send a request</button>
              </div>
            </form>
          </div>
        </div>
      </section>


      <!-- Contact details -->
      <section class="bg-secondary py-5">
        <div class="container py-lg-3 py-xl-4 py-xxl-5">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 py-sm-2 py-md-3 py-lg-4">
            <div class="col">
              <h2 class="h4 mb-4">Orlando</h2>
              <ul class="list-unstyled mb-0">
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-phone lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="tel:+178632256040">+1&nbsp;(786)&nbsp;322&nbsp;560&nbsp;40</a>
                </li>
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-mail lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="mailto:orlando@example.com">orlando@example.com</a>
                </li>
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-map-pin lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="#">514 S. Magnolia St. Orlando, FL 32806</a>
                </li>
              </ul>
            </div>
            <div class="col">
              <h2 class="h4 mb-4">Chicago</h2>
              <ul class="list-unstyled mb-0">
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-phone lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="tel:+178632256040">+1&nbsp;(786)&nbsp;322&nbsp;560&nbsp;40</a>
                </li>
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-mail lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="mailto:chicago@example.com">chicago@example.com</a>
                </li>
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-map-pin lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="#">76, Industrial Dr, West Chicago, 60185</a>
                </li>
              </ul>
            </div>
            <div class="col">
              <h2 class="h4 mb-4">New York</h2>
              <ul class="list-unstyled mb-0">
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-phone lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="tel:+178632256040">+1&nbsp;(786)&nbsp;322&nbsp;560&nbsp;40</a>
                </li>
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-mail lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="mailto:chicago@example.com">newyork@example.com</a>
                </li>
                <li class="nav flex-nowrap mb-3">
                  <i class="ai-map-pin lead text-primary me-2"></i>
                  <a class="nav-link fw-normal p-0 mt-n1" href="#">396 Lillian Blvd, Holbrook, NY 11741</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
@endsection