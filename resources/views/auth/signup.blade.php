

@extends('layouts.app')
@section('content')
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
 
  <!-- Main Content -->
  <main class="body-content">

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">

      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg"></div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form method="post" action="{{ route('user.signup') }}">
              @csrf
              <h1>Create Account</h1>
              <div class="form-row">
                <div class="col-md-6 ">
                  <label for="validationCustom01">Company Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Tech Solutions LLC" name="company_name" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <label for="validationCustom02">VAT Number</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="validationCustom02" placeholder="IT12345678901" name="VAT" required="">
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 ">
                  <div class="form-group">
                    <label for="exampleSelect">Legal Form</label>
                    <select class="form-control" id="exampleSelect" name="legal_form">
                      <option value="1">LLC</option>
                      <option value="2">LTD</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <div class="form-group">
                    <label for="exampleSelect">Sector of Activity</label>
                    <select class="form-control" id="exampleSelect" name="sector_activity">
                      <option value="1">Technology and IT</option>
                      <option value="2">Engineering</option>
                      <option value="3">Mechanics</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
              </div>              
              <div class="form-row">
                <div class="col-md-6 ">
                  <div class="form-group">
                    <label for="exampleSelect">Company Size</label>
                    <select class="form-control" id="exampleSelect" name="company_size">
                      <option value="1">1 ~ 9 employees</option>
                      <option value="2">10 ~ 50 employees</option>
                      <option value="3">51 ~ 100 employees</option>
                      <option value="4">101 ~ 500 employees</option>
                      <option value="5">over 501 employees</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 ">
                  <label for="validationCustom03">Contact Person's Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Mario Rossi" name="contact_person_name" required="">
                    <div class="invalid-feedback">
                      Please provide contact person name
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="form-row">
                <div class="col-md-12 ">
                  <label for="validationCustom03">Legal Address</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="10 Rome Street, 00100 Rome (RM)" name="legal_address" required="">
                    <div class="invalid-feedback">
                      Please provide a legal address.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 ">
                  <label for="validationCustom03">Operational Address(if different)</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="5 Milan Street, 00100 Rome (RM)" name="operational_address" required="">
                    <div class="invalid-feedback">
                      Please provide an operational address.
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <label for="validationCustom04">Position/Role</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="IT Manager" name="position" required="">
                    <div class="invalid-feedback">
                      Please provide position or role.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03">Business Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="validationCustom03" placeholder="Email Address" name="email" required="">
                    <div class="invalid-feedback">
                      Please provide a valid business email.
                    </div>
                  </div>
                </div>                
              </div>
              <div class="form-row">
                 <div class="col-md-6">
                  <label for="validationCustom04">Business Mobile Phone</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="+390123456789" name="mobile_phone" required="">
                    <div class="invalid-feedback">
                      Please provide a business mobile phone.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom04">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="tech_admin" name="username" required="">
                    <div class="invalid-feedback">
                      Please provide a username.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <label for="validationCustom04">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="validationCustom04" placeholder="Password" name="password" required="">
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom04">Password Confirm</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="validationCustom04" placeholder="Confirm Password" name="confirm_password" required="">
                    <div class="invalid-feedback">
                      Please provide a password.
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check pl-0">
                  <label class="ms-checkbox-wrap">
                    <input class="form-check-input" type="checkbox" name="accept_terms" id="invalidCheck" required="">
                    <i class="ms-checkbox-check"></i>
                  </label>
                  <span> Accept to terms and conditions </span><br>
                  <label class="ms-checkbox-wrap">
                    <input class="form-check-input" type="checkbox" name="accept_privacy" id="invalidCheck" required="">
                    <i class="ms-checkbox-check"></i>
                  </label>
                  <span>Accept privacy policy</span>
                  <label class="d-block mt-3"><a href="/terms" class="btn-link">Terms and services</a></label>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Create Account</button>              
              <p class="mb-0 mt-3 text-center">Already have an account? <a class="btn-link" href="/login">Login</a> </p>
            </form>

          </div>
        </div>
      </div>

    </div>

  </main>

@endsection