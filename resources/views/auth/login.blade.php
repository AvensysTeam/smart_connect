
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
          <div class="ms-auth-bg">
            <!-- <img src="{{ asset('assets/img/logo.png') }}"/> -->
          </div>
        </div>
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form  method="post" action="{{ Route('user.login') }}">
              @csrf
              <h1>Login</h1>
              <div class="mb-3">
                <label for="validationCustom08">Email Address</label>
                <div class="input-group">
                  <input type="email" class="form-control" id="validationCustom08" placeholder="Email Address" name="email" required="">
                  <div class="invalid-feedback">
                    Please provide a valid email.
                  </div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="validationCustom09" placeholder="Password" name="password" required="">
                  <div class="invalid-feedback">
                    Please provide a password.
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="ms-checkbox-wrap">
                  <input class="form-check-input" type="checkbox" value="">
                  <i class="ms-checkbox-check"></i>
                </label>
                <span> Remember me </span>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
              <p class="mb-0 mt-3 text-center">Don't have an account? <a class="btn-link" href="/signup">Create Account</a> </p>
<!--               
              <p class="mb-0 mt-3 text-center">Don't have an account? <a class="btn-link" href="/signup">Create Account</a> </p> -->
              
            </form>            
          </div>
        </div>
      </div>
      
    </div>
    
    <!-- Forgot Password Modal -->
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
          
          <div class="modal-body text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="flaticon-secure-shield d-block"></i>
            <h1>Forgot Password?</h1>
            <p> Enter your email to recover your password </p>
            <form method="post">
              <div class="ms-form-group has-icon">
                <input type="text" placeholder="Email Address" class="form-control" name="forgot-password" value="">
                <i class="material-icons">email</i>
              </div>
              <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>

  </main>
  @endsection

