@extends("layouts.main")

@section("content")


<!-- means customers -->
<div class="ms-content-wrapper">
    <div class="row">

        <div class="col-md-12">
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                </ol>
            </nav> -->

            <div class="ms-panel">
                <div class="ms-panel-header">
                <h1>Customers</h1>
                </div>
                <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="customers_table" class="table table-hover w-100"></table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

var dataArray = @json($customers);
var dataSet = [];
dataArray.forEach(function(row){

    row = ["<a href='/user/admin/edit_level/" + row.id + "'>" + row.company_name + "</a>", 
        row.role_id, row.VAT , row.legal_address, row.operational_address, row.contact_person_name, 
        row.position, row.email, row.mobile_phone, row.username, 
        row.accept_terms ? 'Accepted' : "Not accepted", 
        row.accept_privacy ? "Accepted" : "Not accepted", 
        "<a href='/users/delete-customer/" + row.id + "' style='color:red;'>Delete</a>" 
    ];
    dataSet.push(row);

});
// console.log("dataSet => ", dataSet);

(function($) {
    'use strict';

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var customers_table = $('#customers_table').DataTable( {
        data: dataSet,
        columns: [
            { title: "Company Name" },
            { title: "Level"},
            { title: "VAT" },
            { title: "Legal Address" },
            { title: "Operational Address" },
            { title: "Contact Person Name" },
            { title: "Position" },
            { title: "Email" },
            { title: "Mobile Phone" },
            { title: "UserName" },
            { title: "Accept Terms" },
            { title: "Accept Privacy" },
            { title: "Actions" },
        ],
    });

     

 })(jQuery);
</script>


@endsection