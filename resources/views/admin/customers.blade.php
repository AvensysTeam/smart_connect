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
    (function($) {
        'use strict';

        var dataSet = [
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 127</a>", "<a href='/user/customer'>2334346643</a>", "<div class='activation_btn clicked'>1</div>" ],
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/customer'>2334346644</a>", "<div class='activation_btn'>0</div>" ],
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/customer'>2334346645</a>", "<div class='activation_btn clicked'>1</div>" ],
            [ "<a href='/user/customer'>Customer 2</a>", "<a href='/user/customer'>FS 127</a>", "<a href='/user/customer'>2334346643</a>", "<div class='activation_btn clicked'>1</div>" ],
            [ "<a href='/user/customer'>Customer 3</a>", "<a href='/user/customer'>HB 32</a>", "<a href='/user/customer'>2335469950</a>", "<div class='activation_btn'>0</div>"],      
        ];

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
            $(this).toggleClass("clicked");
            let btn = $(this);
            let curValue = btn.val();
            let newValue = curValue == 0 ? 1 : 0;
            btn.val(newValue);            
        });

        // Use the CSRF token in the headers of your Ajax request
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

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