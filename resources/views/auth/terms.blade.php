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
    <div class="ms-content-wrapper">
      <div class="row">

        <div class="col-md-12">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h1>**Disclaimer for Avensys Srl's SMART Connect Service**</h1>
            </div>
            <div class="ms-panel-body">
              <p>Please read the following disclaimer carefully before using the SMART Connect service ("the Service") offered by Avensys Srl ("Avensys").</p>
              <h2>1. **Service Availability and Liability**: </h2>
              <p>Avensys endeavors to provide continuous service but cannot be held liable for any service interruptions, discontinuities, or damages resulting from the use or misuse of the Service. The user acknowledges and agrees that the Service is used at their own risk.</p>
              <h2>2. **Changes to Service and Terms**: </h2>
              <p>Avensys reserves the right, at its sole discretion and without prior notice, to modify the terms and conditions of use for the SMART Connect Service. These changes may include, but are not limited to, alterations in service features, functionalities, and access policies.
</p>
              <h2>3. **Service Charges**:</h2>
              <p>As of today, SMART Connect is offered as a free service. However, Avensys reserves the right to modify this policy and introduce charges or fees for access to the Service at any time in the future.
</p>
              <h2>**Beta Release Acknowledgement**: </h2>
              <p>Users acknowledge that the current version of SMART Connect is a Beta release. It is provided primarily for demonstration purposes to showcase a potential tool and may contain bugs, errors, or other issues.
</p>
              <h2>5. **Data Storage and Privacy**: </h2>
              <p>All user data collected through the Service are stored on Amazon Web Services (AWS) infrastructure. Specific privacy conditions related to the collection, use, and storage of user data will be provided separately. Users are advised to review these conditions carefully to understand their rights and obligations.
</p>
              <h2></h2>
              <p>By using the SMART Connect service, you acknowledge that you have read and understood this disclaimer and agree to be bound by its terms.
</p>
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>

      </div>
    </div>

  </main>


@endsection