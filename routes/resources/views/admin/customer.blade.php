@extends('layouts.main')
@section('content')



    <!-- Body Content Wrapper -->
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
                    <h1>Customer1</h1>
                    </div>
                    <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="customer_table" class="table table-hover w-100"></table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

    // var dataArray = @json($rows);
    var dataArray = {!! json_encode($rows) !!};
    console.log("dataArray = ", dataArray);
    var dataSet = [];
    if(dataArray.length > 0){
        dataArray.forEach(function(data){
            let clsName = "";
            var row = "";
            if(data.activation == 0){
                clsName = "class='customer" + data.id + " disabled-link'";
                row = ["<a href='/user/unit/" + data.unit_id + "'" + clsName + ">" + data.unit_title + "</a>", 
                    "<a href='/user/mqtt/" + data.serial_number + "'" + clsName+">"+data.serial_number+"</a>", 
                    data.project,
                    "<div class='activation_btn clicked' id='activateBtn"+ data.id +"'></div>" ];
            }
            if(data.activation == 1){
                clsName = "class='customer" + data.id + "'";
                row = ["<a href='/user/unit/" + data.unit_id + "'"+clsName+">"+data.unit_title+"</a>", 
                    "<a href='/user/mqtt/" + data.serial_number + "'" +  clsName+">"+data.serial_number+"</a>", 
                    data.project,
                    "<div class='activation_btn' id='activateBtn"+ data.id +"'></div>" ];
            }    
    
            dataSet.push(row);
    
        });
    }


    (function($) {
        'use strict';
         $('#customers_table').empty();
        var tableOne = $('#customer_table').DataTable( {
            data: dataSet,
            columns: [
            { title: "Unit" },
            { title: "Serial Number" },
            { title: "Project" },
            { title: "Smart Activation" },
            ],
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    
        $(".activation_btn").click(function() {
            // let btn = $(this);
            // let curValue = btn.val();
            // let newValue = curValue == 0 ? 1 : 0;
            // btn.val(newValue);   
            let id = $(this).attr('id');
            id = id.replace('activateBtn','');
            let actBtn = $('#activateBtn' + id);
            let alink  = $(".customer" + id);
            $.ajax({
                url: '/user/change_activate',
                method: 'POST',
                data: {id: id},
                context: actBtn,
                success: function(res){
                    $(this).toggleClass("clicked");
                    console.log("switch success = ", res.status);
                    if(res.status == '0'){
                        actBtn.addClass("clicked");                        
                        alink.addClass('disabled-link');
                    } else if(res.status == '1'){
                        actBtn.removeClass("clicked");
                        alink.removeClass('disabled-link');
                    }   
                    // toggleActivation(id, res.status);
                },
                error: function(error){
                    console.log(error);
                }
            })
        });

    })(jQuery);

</script>

@endsection