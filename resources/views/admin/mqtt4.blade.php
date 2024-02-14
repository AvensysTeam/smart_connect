@extends("layouts.main")
@section('content')

    

        <div class="ms-content-wrapper" style="">
        <div class="ms-panel">
        <div class="ms-panel-body">
            <div class="row">
                <div class="col-md-4">
                  
                    <div class="row" style="justify-content: center;">
                        <img src="{{ asset('storage/uploads/immaginisito/'.$imgpath) }}" style="width: 350px;"/>
                        <!-- @if(session('isAdmin'))
                        <div class="upload-img-btn">                            
                            <a href="/user/upload-img/{{ $serial_number }}">Upload Image</a>
                        </div>
                        @endif -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel_save_location_btn invisible"><img class="panel_save_btn_img" src="{{asset('assets/images/btn_confirm.png')}}"></div>   
                    <table class="table table-hover thead-primary">
                    <thead>
                        <tr>
                        <th scope="col">Unit</th>
                        <th scope="col">Serial number</th>
                        <th scope="col">Location</th>                        
                        <th scope="col" colspan="6">Working hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>{{ $unit }}</td>
                        <td>{{ $serial_number }}</td>
                        <td><input type="text" class="form-control form-control-sm" name="location" id="location_ipt" value="{{ $dev->location }}"></td>

                        <!-- <td>2024: 340</td><td>2025:</td><td>2026:</td><td>2027:</td><td>2028:</td> -->
                        <td><a href="/user/showChart" style="display:flex; text-align: center;border: 1px solid rgb(237,125,49); border-radius:5px;padding: 5px;">Click here to see the graph</a></td>
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
                            <img src="{{asset('assets/images/custom_bk_on.png')}}" />
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

            <div style="height: 50px;width: 100% !important; display:flex; justify-content:center; align-items:flex-end; color: whtie;font-size: 22px;">Settable parameters</div>
            <div class="ms-panel" style="border: 1px solid rgb(229,233,241); border-radius: 30px; padding: 20px;">
                <div class="panel_save_btn invisible"><img class="panel_save_btn_img" src="{{asset('assets/images/btn_confirm.png')}}"></div>        
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
                                    <td class="one-row"><input type="text" class="form-control form-control-sm value_ipt" value="2300" style="width:70px;"> rpm</td>
                                    </tr>
                                    <tr>
                                    <td>Exhaust</td>
                                    <td class="one-row"><input type="text" class="form-control form-control-sm input_hundred" value="77" style="width:70px;"></td>
                                    <td></td>
                                    <td class="one-row"><input type="text" class="form-control form-control-sm value_ipt" value="2500" style="width:70px;"> rpm</td>
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
                                    <td><input type="text" class="form-control form-control-sm value_ipt" value="0" style="width:70px;" id="binaryInput"></td>
                                    </tr>                        
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-3">
                            <table class="table table-hover thead-primary">
                                <thead>
                                    <tr>
                                    <th >Filter</th>
                                    <th style="font-size:10px;text-align:center;">Status (clogged (0) – clean (100) )</th>
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
                            <div class="unit_on_off">
                          
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    
                        <ul class="nav nav-tabs d-flex nav-justified " role="tablist">
                            <li role="presentation" ><a href="#tab13" aria-controls="tab13" class="active" role="tab" data-toggle="tab">Monday</a></li>
                            <li role="presentation" ><a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab">Tuesday </a></li>
                            <li role="presentation" ><a href="#tab15" aria-controls="tab15" role="tab" data-toggle="tab">Wednesday </a></li>
                            <li role="presentation" ><a href="#tab15" aria-controls="tab16" role="tab" data-toggle="tab">Thirsday </a></li>
                            <li role="presentation" ><a href="#tab15" aria-controls="tab17" role="tab" data-toggle="tab">Friday </a></li>
                            <li role="presentation" ><a href="#tab15" aria-controls="tab18" role="tab" data-toggle="tab">Saturday </a></li>
                            <li role="presentation" ><a href="#tab15" aria-controls="tab19" role="tab" data-toggle="tab">Sunday </a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active show fade in" id="tab13">
                                <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>

                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                             
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab14">
                            <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                                                      
                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                                                           
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab15">
                                <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                           
                                                                      
                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                             
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab16">
                                <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                                
                                           
                                                                      
                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                        
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab17">
                                <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                          
                                                                      
                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                   
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab18">
                                <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                             
                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td  class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                       
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab19">
                                <table class="table table-hover thead-primary">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                            <td><select class="form-control day_time" style="width: 66px; padding: 1px;"></select></td>
                                          
                                                                      
                                        </tr>      
                                        <tr>
                                            <td>Speed</td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                                 
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                            <td class="speed_per"><div  class="hori-align"><input type="text" class="form-control form-control-sm input_hundred" value="25" style="width:35px;"><span>%</span></div></td>
                                                           
                                        </tr>                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                </div>
            </div>
                                
        </div>


<script>
    let serial = @json($serial_number);
    
    (function($) {
        'use strict';
        $(".unit_on_off").text("Unit ON");

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

        $(".unit_on_off").click(function(){
            $(this).toggleClass("clicked");
            let btn = $(this);
            let curValue = btn.text();
            let newValue = curValue == "Unit ON" ? "Unit OFF" : "Unit ON";
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
            $(".panel_save_btn").removeClass('invisible');
            $(".panel_save_btn").addClass('visible');
        });

       
        var input_hundreds = document.querySelectorAll('.input_hundred');
        input_hundreds.forEach(function(input){
            input.addEventListener('input', function(){
                let inputValue = parseInt(this.value, 10);
                if(inputValue < 0) { this.value = '0'; }
                if(inputValue > 100){ this.value = '100'; }
                
                
                $(".panel_save_btn").removeClass('invisible');
                $(".panel_save_btn").addClass('visible');
            });
        });
        
        var input_values = document.querySelectorAll('.value_ipt');
        input_values.forEach(function(input){
            input.addEventListener('input', function(){
                // let inputxValue = parseInt(this.value, 10);
                // if (inputValue < 0) { this.value = '0'; }
                // if(inputValue > 100){ this.value = '100' }
                
                
                $(".panel_save_btn").removeClass('invisible');
                $(".panel_save_btn").addClass('visible');
            });
        });
        
        var day_time_ctrls = document.querySelectorAll(".day_time");
        day_time_ctrls.forEach(function(ctrl){
            for(let i = 0 ; i < 24 ; i++){
                for(let j = 0 ; j < 60 ; j++){
                    let hour, minute;

                    if( i < 10)
                        hour = "0" + i;
                    else 
                         hour = i;

                    if( j < 10 )
                        minute = "0" + j;
                    else 
                        minute = j;

                    let option = document.createElement("option");
                    option.setAttribute('value', hour + "_" + minute);
                    let optionText = document.createTextNode(hour + ":" + minute);
                    option.appendChild(optionText);
                    ctrl.appendChild(option)
                    
                    
                }
            }
            ctrl.addEventListener('change', function(){
                $(".panel_save_btn").removeClass('invisible');
                $(".panel_save_btn").addClass('visible');
            })
        });

        $(".mqtt-reset-btn").click(function(){
            $("#fresh_return_ipt").val(0)
        });
        $(".panel_save_btn").click(function(){
            $(this).removeClass("visible");
            $(this).addClass("invisible");
        });

        document.getElementById('location_ipt').addEventListener('input', function () {
            let inputValue = this.value;
            $(".panel_save_location_btn").removeClass('invisible');
            $(".panel_save_location_btn").addClass('visible');
        });
        $(".panel_save_location_btn").click(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let location = $("#location_ipt").val();
            $.ajax({
                url: '/user/change_location',
                method: 'POST',
                data: {serial: serial, location: location},
                success: function(res){
                    $(".panel_save_location_btn").removeClass('visible');
                    $(".panel_save_location_btn").addClass('invisible');
                },
                error: function(error){
                    console.log(error);
                }
            })
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

        //manage devices
        var dataArray = @json($dev);
        console.log("ourside = ", dataArray.CO2Level);
        processThirdDot(dataArray.CO2Level);
        processForthDot(dataArray.RHLevel);
        processFifthDot(dataArray.VOCLevel);
        processTemps(dataArray.MeasTemp1F, dataArray.MeasTemp2R, dataArray.MeasTemp3S, dataArray.MeasTemp4E);
        // processTemps(233,234,334,443);
        //============================ for topfan ========================================
        var num1 = 50;
        if(num1 == 0){
            $('.dot-fan-one').css('background-color','red');
            $('.tfan').attr('src', stopImagePathleft);
            $('.m3h').text(" "+num1);
        }else if(num1 < 300){
            $('.dot-fan-one').css('background-color','yellow');
            $('.tfan').attr('src', startImagePathleft);
            $('.m3h').text(" "+num1);
        }else if(num1 > 300){
            $('.dot-fan-one').css('background-color','green');
            $('.tfan').attr('src', startImagePathleft);
            $('.m3h').text(" "+num1);
        }

        //============================ for bottomfan ========================================
        var num2 = 0;

        if(num2 == 0){
            $('.dot-fan-two').css('background-color','red');
            $('.bottomfan').attr('src', stopImagePathright);
            $('.m3h2').text(" "+num2);
        }else if(num2 < 501){
            $('.dot-fan-two').css('background-color','yellow');
            $('.bottomfan').attr('src', startImagePathright);
            $('.m3h2').text(" "+num2);
        }else if(num2 > 500){
            $('.dot-fan-two').css('background-color','green');
            $('.bottomfan').attr('src', startImagePathright);
            $('.m3h2').text(" "+num2);
        }
        //============================ for firstdot ========================================

        var firstdot = 70
        if(firstdot == 0){
            $('.first-dot').css('background-color','red');
            $('.pr1').text(firstdot+"%");
        }else if(firstdot < 71){
            $('.first-dot').css('background-color','yellow');
            $('.pr1').text(firstdot+"%");
        }else if(firstdot > 70){
            $('.first-dot').css('background-color','green'); 
            $('.pr1').text(firstdot+"%");
        }
        //============================ for seconddot ========================================
        var seconddot = 60
        if(seconddot == 0){
            $('.second-dot').css('background-color','red');
            $('.pr2').text(seconddot+"%");
        }else if(seconddot < 61){
            $('.second-dot').css('background-color','yellow');
            $('.pr2').text(seconddot+"%");
        }else if(seconddot > 60){
            $('.second-dot').css('background-color','green'); 
            $('.pr2').text(seconddot+"%");
        }
        //============================ for thirddot ========================================
        function processTemps(temp1, temp2, temp3, temp4){
            $('.temp1').text(temp1/10 + '°C');
            $('.temp2').text(temp2/10 + '°C');
            $('.temp3').text(temp3/10 + '°C');
            $('.temp4').text(temp4/10 + '°C');        
        }
        function processThirdDot(thirddot){

            // var thirddot = 500
            console.log("thirddot = ", thirddot)
            if(thirddot == 0){
                $('.third-dot').css('background-color','red');
                $('.pco1').text(thirddot);
            }else if(thirddot < 201){
                $('.third-dot').css('background-color','yellow');
                $('.pco1').text(thirddot);
            }else if(thirddot > 200){
                $('.third-dot').css('background-color','green'); 
                $('.pco1').text(thirddot);
            }
        }
        //============================ for forthdot ========================================        
        function processForthDot(forthdot){

            if(forthdot == 0){
                $('.forth-dot').css('background-color','red');
                $('.pco2').text(forthdot);
            }else if(forthdot < 201){
                $('.forth-dot').css('background-color','yellow');
                $('.pco2').text(forthdot);
            }else if(forthdot > 200){
                $('.forth-dot').css('background-color','green'); 
                $('.pco2').text(forthdot);
            }
        }
        //============================ for fifthdot ========================================        
        function processFifthDot(fifthdot){

            if(fifthdot == 0){
                $('.fifth-dot').css('background-color','red');
                $('.pco3').text(fifthdot);
            }else if(fifthdot < 201){
                $('.fifth-dot').css('background-color','yellow');
                $('.pco3').text(fifthdot);
            }else if(fifthdot > 200){
                $('.fifth-dot').css('background-color','green'); 
                $('.pco3').text(fifthdot);
            }
        }

        var firstco2 = 1
        if(firstco2==0){
        $('.first-co2').hide();
        $('.pco1').hide();
        $('.third-dot').hide();
        }else{
            $('.first-co2').show();
            $('.pco1').show();
            $('.third-dot').show();
        }

        var secondco2 = 1
        if(secondco2==0){
        $('.second-co2').hide();
        $('.pco2').hide();
        $('.forth-dot').hide();
        }else{
            $('.second-co2').show();
            $('.pco2').show();
            $('.forth-dot').show();
        }
        
        var thirdco2 = 1
        if(thirdco2==0){
        $('.third-co2').hide();
        $('.pco3').hide();
        $('.fifth-dot').hide();
        }else{
            $('.third-co2').show();
            $('.pco3').show();
            $('.fifth-dot').show();
        }

        var cir1 = 50;

        if(cir1 == 0){
            $('.cirtst').css('background-color','red');
            $('.htext').text(cir1);
        }else if(cir1 < 200){
            $('.cirtst').css('background-color','yellow');
            $('.htext').text(cir1);
        }else if(cir1 > 199){
            $('.cirtst').css('background-color','green'); 
            $('.htext').text(cir1);
        }

        var cir2 = 200;

        if(cir2 == 0){
            $('.cirtfd').css('background-color','red');
            $('.dxtext').text(cir2);
        }else if(cir2 < 200){
            $('.cirtfd').css('background-color','yellow');
            $('.dxtext').text(cir2);
        }else if(cir2 > 199){
            $('.cirtfd').css('background-color','green'); 
            $('.dxtext').text(cir2);
        }

        var cir3 = 200;

        if(cir3 == 0){
            $('.cirtfl').css('background-color','red');
            $('.ehtext').text(cir3);
        }else if(cir3 < 200){
            $('.cirtfl').css('background-color','yellow');
            $('.ehtext').text(cir3);
        }else if(cir3 > 199){
            $('.cirtfl').css('background-color','green'); 
            $('.ehtext').text(cir3);
        }

        var cir4 = 200;

        if(cir4 == 0){
            $('.cirteh').css('background-color','red');
            $('.htextt').text(cir4);;
        }else if(cir4 < 200){
            $('.cirteh').css('background-color','yellow');
            $('.htextt').text(cir4);
        }else if(cir4 > 199){
            $('.cirteh').css('background-color','green'); 
            $('.htextt').text(cir4);
        }

        var cir5 = 200;

        if(cir5 == 0){
            $('.cirted').css('background-color','red');
            $('.dxtextt').text(cir5);
        }else if(cir5 < 200){
            $('.cirted').css('background-color','yellow');
            $('.dxtextt').text(cir5);
        }else if(cir5 > 199){
            $('.cirted').css('background-color','green'); 
            $('.dxtextt').text(cir5);
        }

        var cir6 = 200;

        if(cir6 == 0){
            $('.cirtel').css('background-color','red');
            $('.ehtextt').text(cir6);
        }else if(cir6 < 200){
            $('.cirtel').css('background-color','yellow');
            $('.ehtextt').text(cir6);
        }else if(cir6 > 199){
            $('.cirtel').css('background-color','green'); 
            $('.ehtextt').text(cir6);
        }

        var cir7 = 200;

        if(cir7 == 0){
            $('.cirtfh').css('background-color','red');
            $('.htextth').text(cir7);
        }else if(cir7 < 200){
            $('.cirtfh').css('background-color','yellow');
            $('.htextth').text(cir7);
        }else if(cir7 > 199){
            $('.cirtfh').css('background-color','green'); 
            $('.htextth').text(cir7);
        }

        var cir8 = 200;

        if(cir8 == 0){
            $('.cirtsh').css('background-color','red');
            $('.dxtextth').text(cir8);
        }else if(cir8 < 200){
            $('.cirtsh').css('background-color','yellow');
            $('.dxtextth').text(cir8);
        }else if(cir8 > 199){
            $('.cirtsh').css('background-color','green'); 
            $('.dxtextth').text(cir8);
        }

        var cir9 = 200;

        if(cir9 == 0){
            $('.cirtsd').css('background-color','red');
            $('.ehtextth').text(cir9);
        }else if(cir9 < 200){
            $('.cirtsd').css('background-color','yellow');
            $('.ehtextth').text(cir9);
        }else if(cir9 > 199){
            $('.cirtsd').css('background-color','green'); 
            $('.ehtextth').text(cir9);
        }

        var cir10 = 200;

        if(cir10 == 0){
            $('.cirtsl').css('background-color','red');
            $('.trefotext').text(cir10);
        }else if(cir10 < 200){
            $('.cirtsl').css('background-color','yellow');
            $('.trefotext').text(cir10);
        }else if(cir10 > 199){
            $('.cirtsl').css('background-color','green'); 
            $('.trefotext').text(cir10);
        }

        var cir11 = 200;

        if(cir11 == 0){
            $('.cirtre-a').css('background-color','red');
            $('.trefttext').text(cir11);
        }else if(cir11 < 200){
            $('.cirtre-a').css('background-color','yellow');
            $('.trefttext').text(cir11);
        }else if(cir11 > 199){
            $('.cirtre-a').css('background-color','green'); 
            $('.trefttext').text(cir11);
        }

        var cir12 = 200;

        if(cir12 == 0){
            $('.cirtre-b').css('background-color','red');
            $('.trefthtext').text(cir12);
        }else if(cir12 < 200){
            $('.cirtre-b').css('background-color','yellow');
            $('.trefthtext').text(cir12);
        }else if(cir12 > 199){
            $('.cirtre-b').css('background-color','green'); 
            $('.trefthtext').text(cir12);
        }

        var cir13 = 200;

        if(cir13 == 0){
            $('.cirtre-c').css('background-color','red');
            $('.trefftext').text(cir13);
        }else if(cir13 < 200){
            $('.cirtre-c').css('background-color','yellow');
            $('.trefftext').text(cir13);
        }else if(cir13 > 199){
            $('.cirtre-c').css('background-color','green'); 
            $('.trefftext').text(cir13);
        }


    })(jQuery);

</script>
@endsection