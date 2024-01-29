@extends('layouts.main')
@section('content')


    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                    <h6>Reference Date</h6>
                    </div>
                    <div class="ms-panel-body">
                        <form>
                            <input id="datepicker" width="270" />
                            <ul class="ms-list d-flex">
                                <li class="ms-list-item pl-0">
                                <label class="ms-checkbox-wrap">
                                    <input type="radio" name="workhour_option" value="day" checked>
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Day </span>
                                </li>
                                <li class="ms-list-item">
                                <label class="ms-checkbox-wrap">
                                    <input type="radio" name="workhour_option" value="week">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Week </span>
                                </li>
                                <li class="ms-list-item">
                                <label class="ms-checkbox-wrap">
                                    <input type="radio" name="workhour_option" value="month">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Month </span>
                                </li>
                                <li class="ms-list-item">
                                <label class="ms-checkbox-wrap">
                                    <input type="radio" name="workhour_option" value="year"  >
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Year </span>
                                </li>
                            </ul>
                            <input type="button" class="btn btn-primary d-block w-25" id="btn_view"  value="View"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                    <h6>Working hours</h6>
                    </div>
                    <div class="ms-panel-body">
                        <!-- <canvas id="workinghours-chart"></canvas> -->
                        <!-- <canvas id="bar-chart"></canvas> -->
                        <div id="working-hours-line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
$(document).ready(function () {

    $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    var selectedValue = "day"; 
    yeardata =  [
        { year: '2024', value: 380 },
        { year: '2025', value: 1300 },
        { year: '2026', value: 1400 },
        { year: '2027', value: 234 }
    ];
    monthdata = [
        { month: '1', value: 380 },
        { month: '2', value: 1300 },
        { month: '3', value: 233 },
        { month: '4', value: 1110 },
        { month: '5', value: 333 },
        { month: '6', value: 1700 },
        { month: '7', value: 1210 },
        { month: '8', value: 1300 },
        { month: '9', value: 1400 },
        { month: '10', value: 534 },
        { month: '11', value: 465 },
        { month: '12', value: 1530 }
    ];
    weekdata = [
        { week: '1', value: 455 },
        { week: '2', value: 1344 },
        { week: '3', value: 546 },
        { week: '4', value: 53 },
        { week: '5', value: 333 },
        { week: '6', value: 644 },
        { week: '7', value: 533 } ,
    ];
    daydata = [
        { day: '1', value: 380 },
        { day: '2', value: 1300 },
        { day: '3', value: 233 },
        { day: '4', value: 1110 },
        { day: '5', value: 333 },
        { day: '6', value: 1700 },
        { day: '7', value: 1210 },
        { day: '8', value: 1300 },
        { day: '9', value: 1400 },
        { day: '10', value: 534 },
        { day: '11', value: 465 },
        { day: '12', value: 1530 },
        { day: '13', value: 465 },
        { day: '14', value: 1530 },
        { day: '15', value: 465 },
        { day: '16', value: 1530 },
        { day: '17', value: 465 },
        { day: '18', value: 1530 },
        { day: '19', value: 465 },
        { day: '20', value: 1530 },
        { day: '21', value: 465 },
        { day: '22', value: 1530 },
        { day: '23', value: 465 },
        { day: '24', value: 1530 },
        { day: '25', value: 465 },
        { day: '26', value: 1530 },
        { day: '27', value: 465 },
        { day: '28', value: 1530 },
        { day: '29', value: 465 },
        { day: '30', value: 1530 },
        { day: '31', value: 465 }
    ];
    var mychart =  new Morris.Line({
        element: 'working-hours-line-chart',
        data:daydata,
        xkey: 'day',
        ykeys: ['value'],
        labels: ['Value']
    });
    // (function($){
    //     'use strict';
    //     // Line chart
    // });

    $('input[type="radio"]').change(function () {
        // Get the value of the selected radio button
        selectedValue = $('input[name="workhour_option"]:checked').val();
        console.log(selectedValue)
    });
    $("#btn_view").click(function(){
        $('#working-hours-line-chart').empty();
        
        console.log(selectedValue);
        if(selectedValue == "year"){
            mychart = new Morris.Line({
                element: 'working-hours-line-chart',
                data: yeardata,
                xkey: 'year',
                ykeys: ['value'],
                labels: ['Value' ]
            });
        }
        if(selectedValue == "month"){
            mychart = new Morris.Line({
                element: 'working-hours-line-chart',
                data: monthdata,
                xkey: 'month',
                ykeys: ['value'],
                labels: ['Value']
            });
        }
        if(selectedValue == "week"){
            mychart = new Morris.Line({
                element: 'working-hours-line-chart',
                data: weekdata,
                xkey: 'week',
                ykeys: ['value'],
                labels: ['Value']
            });
        }
        if(selectedValue == "day"){
            mychart = new Morris.Line({
                element: 'working-hours-line-chart',
                data: daydata,
                xkey: 'day',
                ykeys: ['value'],
                labels: ['Value']
            });
        }
    });
});
    
 </script>

@endsection