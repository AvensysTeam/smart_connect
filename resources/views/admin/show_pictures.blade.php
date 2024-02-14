@extends("layouts.main")
@section('content')

	<!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">

      	<div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h1>Upload Pictures</h1>
            </div>
            <div class="ms-panel-body">
              @foreach($rows as $row)
              <form method="post" action="/user/admin/upload/picture" enctype="multipart/form-data">
              	@csrf
                <ul class="ms-list d-flex">
                  <li class="ms-list-item" style="display: flex; align-items: center;justify-content: center;">
                    <span> {{ $row->unit }} </span>
                  </li>
                  <input type="hidden" name="serial" value="{{ $row->serial }}">
                  <li class="ms-list-item">
                    <img src="{{ asset('storage/uploads/immaginisito/'.$row->imgpath) }}" style="width:50px; height: 50px;"/>
                  </li>
                  <li class="ms-list-item">
                    <div class="custom-file">
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="file">
                    </div>
                  </li>
                  <li class="ms-list-item">
                    <button class="btn btn-primary d-block w-50" type="submit" style="margin-top: 0rem !important;">Upload picture</button>
                  </li>
                </ul>
              </form>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection