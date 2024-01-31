@extends('layouts.main')
@section('content')

    

        <div class="ms-content-wrapper" style="">
        <div class="ms-panel">
        <div class="ms-panel-body">
            <div class="row">
                <div class="col-md-4">
                  
                    <div class="row">
                        <img src="{{ asset('storage/uploads/price/'.$imgpath) }}" style="width: 350px;"/>
                    </div>
                </div>
                <div class="col-md-8">
                    <table class="table table-hover thead-primary">
                    <thead>
                        <tr>
                        <th scope="col">Unit</th>
                        <th scope="col">Serial number</th>
                        <th scope="col" colspan="6">Working hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{{ $unit }}</td>
                        <td>{{ $serial_number }}</td>
                        <td>2024: 340</td><td>2025:</td><td>2026:</td><td>2027:</td><td>2028:</td>
                        <td><a href="/user/showChart" style="border: 1px solid rgb(237,125,49); border-radius:5px;padding: 5px;">Click here to see the graph</a></td>
                        </tr>                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
            <!-- <div class="row"> -->
                <!-- Body Content Wrapper -->
                <div class="maxcontainer">
                    <div class="sub-con" style="height: 330px; background: #fff;">
                        <div class="before-content">
                            <div class="bigLineBottom"></div>
                            <img src="{{asset('assets/images/filter_green.png')}}" class="imgTowerFirst  {{ $showDevice ? '': 'hidden_dev' }}" />
                            <div class="txt-last">
                                <div class="dot-last first-dot  {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                <p class="pr1  {{ $showDevice ? '': 'hidden_dev' }}"></p>
                            </div>
                        </div>
                        <div class="main-div">
                            <div class="topSideline-con">
                                <div class="topSideline"></div>
                                <p class="p-tag-new">t<span class="p-r-span">e</span> <span class="p-deg-span temp4">08&degC</span></p>
                            </div>
                            <div class="diag-bt-slide {{ $showDevice ? 'hidden_dev' : '' }}"></div>
                            <div class="bottomSideline-con">
                                <div class="bottomSideline"></div>
                                <p class="p-tag-new p-tag-mar">t<span class="p-r-span">f</span> <span class="p-deg-span temp1">07&degC</span></p>
                            </div>
                            <div class="gif-content-line">
                                <p class="m-tag-chng  {{ $showDevice ? '': 'hidden_dev' }}" style="margin-right:89px;">M<span>e</span></p>
                                <p class="txt-top  {{ $showDevice ? '': 'hidden_dev' }}">m&sup3;/h<span class="m3h"></span></p>
                                <div class="top-fan-content">
                                    <div class="dot-fan-one {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                    <img src="{{ asset('assets/images/fan_l.gif')}}" class="topfan1 tfan  {{ $showDevice ? '': 'hidden_dev' }}" />
                                </div>
                            </div>
                            <div class="gif-content-line-bottom">
                                <div class="top-fan-content">
                                    <div class="dot-fan-two {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                    <img src="{{asset('assets/images/fan_r.gif')}}" class="topfan2 bottomfan  {{ $showDevice ? '': 'hidden_dev' }}" />
                                </div>
                                <p class="txt-top-two {{ $showDevice ? '': 'hidden_dev' }}">m&sup3;/h<span class="m3h2"></span></p>
                                <p class="m-tag-chng {{ $showDevice ? '': 'hidden_dev' }}">M<span>f</span></p>
                            </div>
                        </div>
                        <div class="main-img">
        
                            <img src="{{asset('assets/images/3devices.png')}}" class="img-3devides dev1  {{ $showDevice ? '': 'hidden_dev' }}"/>
                            <img src="{{asset('assets/images/3devices.png')}}" class="img-3devides dev2  {{ $showDevice ? '': 'hidden_dev' }}"/>
                            <img src="{{asset('assets/images/3devices.png')}}" class="img-3devides dev3  {{ $showDevice ? '': 'hidden_dev' }}"/>
                            <div class="dot-img  {{ $showDevice ? '': 'hidden_dev' }}"></div>
                            <img src="{{asset('assets/images/custom_bk_off.png')}}" />
                            <div class="dot-img-2  {{ $showDevice ? '': 'hidden_dev' }}"></div>
                            <div class="main-cir-dot  {{ $showDevice ? '': 'hidden_dev' }}" style="bottom: 2px;left: 35px;">
                                <div class="div-circle">
                                    <div class="circle1 cirtst"></div>
                                    <p class="circle-p ">tfh<span class="htext"></span>&degC</p>
                                </div>
                                <div class="div-circle">
                                    <div class="circle1 cirtfd"></div>
                                    <p class="circle-p">tfd<span class="dxtext"></span>&degC</p>
                                </div>
                                <div class="div-circle">
                                    <div class="circle1 cirtfl"></div>
                                    <p class="circle-p">tfl<span class="ehtext"></span>&degC</p>
                                </div>
                            </div>
        
                            <div class="main-cir-dot  {{ $showDevice ? '': 'hidden_dev' }}" style="bottom: 2px;right: 194px;">
                                <div class="div-circle">
                                    <div class="circle1 cirteh"></div>
                                    <p class="circle-p ">trh<span class="htextt"></span>&degC</p>
                                </div>
                                <div class="div-circle">
                                    <div class="circle1 cirted"></div>
                                    <p class="circle-p">trd<span class="dxtextt"></span>&degC</p>
                                </div>
                                <div class="div-circle">
                                    <div class="circle1 cirtel"></div>
                                    <p class="circle-p">trl<span class="ehtextt"></span>&degC</p>
                                </div>
                            </div>
                            <div class="main-cir-dot  {{ $showDevice ? '': 'hidden_dev' }}" style="top: 2px;right: 76px;">
                                <div class="div-circle">
                                    
                                    <p class="circle-p">tsh<span class="htextth"></span>&degC</p>
                                    <div class="circle1 cirtfh"></div>
                                </div>
                                <div class="div-circle">
                                    
                                    <p class="circle-p">tsd<span class="dxtextth"></span>&degC</p>
                                    <div class="circle1 cirtsh"></div>
                                </div>
                                <div class="div-circle">
                                    
                                    <p class="circle-p">tsl<span class="ehtextth"></span>&degC</p>
                                    <div class="circle1 cirtsd"></div>
                                </div>
                            </div>
                            <div class="fourDot   {{ $showDevice ? '': 'hidden_dev' }}">
                                <p class="bpd-txt">BPD<span>e</span></p>
                                <div class="sub-dot" style="left: 0;top: 0;">
                                    <p class="circle-div11-text">tee<span class="trefotext"></span>&degC</p>
                                    <div class="circle-div10 cirtsl"></div>      
                                </div>
        
                                <div class="sub-dot" style="right: 0;top: 0;">
                                    <p class="circle-div11-text">tse<span class="trefttext"></span>&degC</p>
                                    <div class="circle-div10 cirtre-a"></div>   
                                </div>
        
                                <div class="sub-dot" style="bottom: 0;left: 0;">
                                    <div class="circle-div10 cirtre-b"></div>
                                    <p class="circle-div10-text">tfe<span class="trefthtext"></span>&degC</p>    
                                </div>
                                <p class="bpd-txt" style="margin-top: -19px;margin-left: 214px;">BPD<span>s</span></p>
                                <div class="sub-dot" style="right: 0;bottom: 0;">
                                    <div class="circle-div10 cirtre-c"></div>
                                    <p class="circle-div10-text">tre<span class="trefftext"></span>&degC</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="main-div-two">
                            <div class="second-sub-div">
                                <p class="p-tag-new p-tag-mar2">t<span class="p-r-span">s</span> <span class="p-deg-span temp3">20&degC</span></p>
                                <div class="line-sky"></div>
                            </div>
                            <div class="fan-right1">
                                <p class="mr-ptag {{ $showDevice ? '': 'hidden_dev' }}">M<span>s</span></p>
                                <p class="p-tag-top {{ $showDevice ? '': 'hidden_dev' }}">m³/h<span class="m3h2"> 0</span></p>
                                <div class="rig-dot-top {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                <img src="{{asset('assets/images/fan_ri.png')}}" class=" {{ $showDevice ? '': 'hidden_dev' }}"/>
                                <div class="diag-bar  {{ $showDevice ? 'hidden_dev' : '' }}"></div>
                                <div class="aft-sky-fan"></div>
                            </div>
                            <div class="second-sub-div2">
                                <p class="p-tag-new p-tag-mar2" style="margin-top:0px;">t<span class="p-r-span">r</span> <span class="p-deg-span temp2">21&degC</span></p>
                                <img src="{{asset('assets/images/filter_green.png')}}" class="imgtoweryelow  {{ $showDevice ? '': 'hidden_dev' }}" />
                                <div class="txt-last co2celcius  {{ $showDevice ? '': 'hidden_dev' }}">
                                    <div class="dot-last second-dot" ></div>
                                    <p><span class="pr2"></span></p>
                                </div>
                                <div class="bigLineBottom2"></div>
                                <div class="co2 first-co2  {{ $showDevice ? '': 'hidden_dev' }}" >CO2</div>
                                <div class="txt-last co2celcius3  {{ $showDevice ? '': 'hidden_dev' }}">
                                    <div class="dot-last third-dot {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                    <p class="pco1">250</p>
                                </div>
                                <div class="co2 co2-c2 second-co2 {{ $showDevice ? '': 'hidden_dev' }}" >CO2</div>
                                <div class="txt-last co2celcius3 co2celcius3-p2 {{ $showDevice ? '': 'hidden_dev' }}">
                                    <div class="dot-last forth-dot"></div>
                                    <p class="pco2">250</p>
                                </div>
                                <div class="co2 co2-c3 third-co2  {{ $showDevice ? '': 'hidden_dev' }}" >CO2</div>
                                <div class="txt-last co2celcius3 co2celcius3-p3 {{ $showDevice ? '': 'hidden_dev' }}">
                                    <div class="dot-last fifth-dot {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                    <p class="pco3" >250</p>
                                </div>
                                <div class="fan-right" >
                                    <div class="rig-dot-btm {{ $showDevice ? '': 'hidden_dev' }}"></div>
                                    <img src="{{asset('assets/images/fan_l.gif')}}" style="left: 239px;top: 5px;" class=" {{ $showDevice ? '': 'hidden_dev' }}"/>
                                    <div class="diag-bar  {{ $showDevice ? 'hidden_dev' : '' }}"></div>
                                    <div class="div-rig-yellow"></div>
                                </div>
                                <p class="txt-rig {{ $showDevice ? '': 'hidden_dev' }}">m³/h<span class="m3h2"> 0</span></p>
                                <p class="p-txt-mr {{ $showDevice ? '': 'hidden_dev' }}">M<span>r</span></p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
            <div style="width: 100%; text-align: center; color: whtie;font-size: 22px;">Settable parameters</div>
            <div class="ms-panel" style="border: 1px solid rgb(229,233,241); border-radius: 30px; padding: 20px;">
            <div class="ms-panel-body">
                <div class="row" >

                        <div class="col-md-4">
                            <table class="table table-hover thead-primary">
                                <thead>
                                    <tr>
                                    <th scope="col">Fan</th>
                                    <th scope="col">FSC[%]</th>
                                    <th scope="col">Airflow CAF</th>
                                    <th scope="col">RPM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Supply</td>
                                    <td class="one-row"><input type="text" class="form-control form-control-sm input_hundred" value="88" style="width:70px;"></td>
                                    <td></td>
                                    <td class="one-row"><input type="text" class="form-control form-control-sm " value="2300" style="width:70px;"> rpm</td>
                                    </tr>
                                    <tr>
                                    <td>Exhaust</td>
                                    <td class="one-row"><input type="text" class="form-control form-control-sm input_hundred" value="77" style="width:70px;"></td>
                                    <td></td>
                                    <td class="one-row"><input type="text" class="form-control form-control-sm" value="2500" style="width:70px;"> rpm</td>
                                    </tr>                           
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-hover thead-primary">
                                <thead>
                                    <tr>
                                    <th scope="col">Bypass</th>
                                    <th scope="col">Open (1) /closed (0)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Status</td>
                                    <td><input type="text" class="form-control form-control-sm" value="0" style="width:70px;" id="binaryInput"></td>
                                    </tr>                        
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table class="table table-hover thead-primary">
                                <thead>
                                    <tr>
                                    <th >Filter</th>
                                    <th >Status (clogged (0) – clean (100) )</th>
                                    <th >Reset</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Fresh</td>
                                        <td rowspan="2" class="mqtt-status-ipt-con"><input type="text" id="fresh_return_ipt" class="form-control form-control-sm input_hundred" value="70" style="width:70px;"></td>
                                        <td rowspan='2' class="mqtt-reset-btn-con"><div class="mqtt-reset-btn">Reset</div></td>
                                    </tr>                     
                                    <tr>
                                        <td>Return</td>
                                    </tr>      
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1" style="display: flex; align-items: center;justify-content:center; color:white;">
                            <div style="border: 1px solid rgb(229,233,241);
                                    border-radius: 5px; padding: 5px; 
                                    background: rgb(0,176,80);
                                    display:flex; align-items:center;justify-content:center;
                                    width: 70px; height: 70px;
                                    cursor: pointer;
                                    text-align: center;
                                    ">
                                Unit {{ $unitON ? "ON" : "OFF"}}
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-hover thead-primary">
                            <thead>
                                <tr>
                                <th scope="col">Fan</th>
                                <th scope="col" colspan="5">Monday</th>
                                <th scope="col" colspan="5" >Tuesday</th>
                                <th scope="col" colspan="5" >Wednesday</th>
                                <th scope="col" colspan="5">Thirsday</th>
                                <th scope="col" colspan="5" >Friday</th>
                                <th scope="col" colspan="5" >Saturday</th>
                                <th scope="col" colspan="5" >Sunday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Time</td>
                                    <td>12:00</td><td>14:00</td><td>15:00</td><td>18:00</td><td>12:00</td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>                               
                                </tr>      
                                <tr>
                                    <td>Speed</td>
                                    <td>20%</td><td>50%</td><td>70%</td><td>20%</td><td>1400</td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                    <td></td><td></td><td></td><td></td><td></td>                               
                                </tr>                     
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
                                
        </div>


<script>
    
    
    (function($) {
        'use strict';

        var dataSet = [
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 127</a>", "<a href='/user/customer'>2334346643</a>", "<div class='activation_btn clicked'></div>" ],
            [ "<a href='/user/customer'>Customer 1</a>", "<a href='/user/customer'>Vs 47</a>", "<a href='/user/customer'>2334346644</a>", "<div class='activation_btn'></div>" ],
                
        ];

        var tableOne = $('#top_table').DataTable( {
            data: dataSet,
            columns: [
            { title: "Unit" },
            { title: "Serial number" },
            { title: "Working hours" },
            ], 
        });

        $(".activation_btn").click(function() {
            $(this).toggleClass("clicked");
            let btn = $(this);
            let curValue = btn.text();
            let newValue = curValue == 'a' ? 'b' : 'a';
            btn.text(newValue);            
        });

        document.getElementById('binaryInput').addEventListener('input', function () {
        let inputValue = this.value;

        // Check if the input is either 0 or 1
        if (inputValue !== '0' && inputValue !== '1') {
            // If not, set the input value to an empty string
            this.value = '';
            // alert('Please enter only 0 or 1.');
        }
        });
        var input_hundreds = document.querySelectorAll('.input_hundred');
        input_hundreds.forEach(function(input){
            input.addEventListener('input', function(){
                let inputValue = parseInt(this.value, 10);
                if (inputValue < 0) { this.value = '0'; }
                if(inputValue > 100){ this.value = '100' }

            });
        });
        $(".mqtt-reset-btn").click(function(){
            $("#fresh_return_ipt").val('0');
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