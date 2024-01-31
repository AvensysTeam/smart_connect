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
                    <h1>Avensys</h1>
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
    var dataArray = @json($rows);
    console.log("dataArray = ", dataArray);
    var dataSet = [];
    dataArray.forEach(function(data){
        let clsName = "";
        var row = "";
        if(data.activation == 0){
            clsName = "class='customer" + data.id + " disabled-link'";
            row = ["<a href='/user/customer/" + data.customer_id + "'"+clsName+">"+ data.title+"</a>", 
                "<a href='/user/unit/" + data.unit_id + "'" + clsName + ">" + data.unit_title + "</a>", 
                "<a href='/user/mqtt/" + data.serial_number + "'" + clsName+">"+data.serial_number+"</a>", 
                "<div class='activation_btn clicked' id='activateBtn"+ data.id +"'></div>" ];
        }
        if(data.activation == 1){
            clsName = "class='customer" + data.id + "'";
            row = ["<a href='/user/customer/" + data.customer_id + "'"+clsName+">"+ data.title+"</a>", 
                "<a href='/user/unit/" + data.unit_id + "'"+clsName+">"+data.unit_title+"</a>", 
                "<a href='/user/mqtt/" + data.serial_number + "'" + clsName+">"+data.serial_number+"</a>", 
                "<div class='activation_btn' id='activateBtn"+ data.id +"'></div>" ];
        }    

        dataSet.push(row);

    });
    

    (function($) {
        'use strict';
        
        // var dataSet = [
        //     [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 127</a>", "<a href='/user/mqtt'>2334346643</a>", "<div class='activation_btn clicked'>1</div>" ],
        //     [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/mqtt'>2334346644</a>", "<div class='activation_btn'>0</div>" ],
        //     [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/mqtt'>2334346645</a>", "<div class='activation_btn clicked'>1</div>" ],
        //     [ "<a href='/user/customer'>Customer 2</a>", "<a href='/user/customer'>FS 127</a>", "<a href='/user/mqtt'>2334346643</a>", "<div class='activation_btn clicked'>1</div>" ],
        //     [ "<a href='/user/customer'>Customer 3</a>", "<a href='/user/customer'>HB 32</a>", "<a href='/user/mqtt'>2335469950</a>", "<div class='activation_btn'>0</div>"],      
        // ];
        
        // Use the CSRF token in the headers of your Ajax request
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var tableOne = $('#customers_table').DataTable( {
            data: dataSet,
            columns: [
            { title: "Title" },
            { title: "Unit" },
            { title: "Serial Number" },
            { title: "Smart Activation" },
            ],
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

        function toggleActivation( id, status){
            if(status == 0){
                $('#activationBtn' + id).addClass("clicked");                        
            } else if(status == 1){
                $('#activationBtn' + id).removeClass("clicked");
            }   
        }


        // $.ajax({
        //     url: '/user/customers',
        //     method: 'POST',
        //     // data: postData,
        //     success: function (data) {
        //         console.log(data);

        //     },
        //     error: function (error) {
        //         console.error('Error getting Customers request:', error);
        //     }
        // });


    })(jQuery);

</script>

@endsection