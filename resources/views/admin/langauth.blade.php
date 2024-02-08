@extends("layouts.main")
@section('content')

	<!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">

      	<div class="col-md-6">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h1>Edit Language</h1>
            </div>
            <div class="ms-panel-body">
              <form method="post" action="/user/languages/level1/editAuth">
              	@csrf
                <div class="form-group">
	                <label for="exampleSelect">Allow</label>
	                <select class="form-control" id="exampleSelect" name="editor_id">
	                  	@foreach($rows as $row)
	                    <option value="{{ $row->id }}">{{ $row->email }}</option>
	                    @endforeach
	                </select>
                </div>
                <div class="form-group">
                  	<label for="exampleEmail">Enter Language</label>
                 	<select class="form-control" id="exampleSelect" name="language_code">
                 		@foreach($langs as $item)
	                    <option value="{{ $item->code }}">{{ $item->name }}</option>
	                   @endforeach
                      <option value="none">none</option>
	                </select>
                </div>
                <button class="btn btn-primary mt-4 d-block w-50" type="submit">Save</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
        	 <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Allowed Companys to edit words</h6>
            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-bordered thead-primary">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Allowed</th>
                      <th scope="col">Language</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@php $no = 1; @endphp
                  	@foreach($editors as $editor)
                    <tr>
                      <th scope="row">{{ $no }}</th>
                      <td>{{ $editor->company_name }}</td>
                      <td>{{ $editor->language_name }}</td>
                    </tr>
                    @php ++$no; @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection