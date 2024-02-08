@extends("layouts.main")
@section('content')

	<!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">

		<div class="row">
	  		<div class="col-md-12">
	  			<div class="ms-panel w-50">
		            <div class="ms-panel-header">
		              <h1>Change Level</h1>
		            </div>
		            <div class="ms-panel-body">
		              <form method="post" action="{{ route('admin.save.customer_level') }}">
		              	@csrf
		                <div class="form-group">
			                <label for="exampleSelect">Change Level</label>
			                <select class="form-control" id="exampleSelect" name="new_role_id">
			                    <option value="1">Level 1</option>
			                    <option value="2">Level 2</option>
			                </select>
			                </select>
		                </div>
		                <div class="form-group">
			                <label for="exampleSelect">Change Upper Level 1</label>
			                <select class="form-control" id="exampleSelect" name="new_level_up_id">
			                    <option value="0">No Upper Level</option>
			                	@foreach($level1_rows as $row)
			                    <option value="{{ $row->id }}">{{ $row->company_name }}</option>
			                    @endforeach
			                </select>
			                </select>
		                </div>
		                <input type="hidden" name="customer_id" value="{{ $customer_id }}">
		                <button class="btn btn-primary mt-4 d-block w-40" type="submit">Save</button>
		              </form>
		            </div>
		        </div>
	  		</div>
	  	</div>
    </div>
@endsection