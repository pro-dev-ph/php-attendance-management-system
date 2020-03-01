@extends('layouts.personal')
    
    @section('styles')
    <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <h2 class="page-title">My Attendance</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="box box-success">
                <div class="box-body reportstable">
                    <form action="" method="get" accept-charset="utf-8" class="ui small form form-filter" id="filterform">
                        {{ csrf_field() }}
                        <div class="inline two fields">
                            <div class="three wide field">
                                <label>Date Range</label>
                                <input id="datefrom" type="text" name="" value="" placeholder="Start Date" class="airdatepicker">
                                <i class="ui icon calendar alternate outline calendar-icon"></i>
                            </div>

                            <div class="two wide field">
                                <input id="dateto" type="text" name="" value="" placeholder="End Date" class="airdatepicker">
                                <i class="ui icon calendar alternate outline calendar-icon"></i>
                            </div>
                            <button id="btnfilter" class="ui button positive small"><i class="ui icon filter alternate"></i> Filter</button>
                        </div>
                    </form>

                    <table width="100%" class="table table-bordered table-hover" id="dataTables-example" data-order='[[ 0, "desc" ]]'>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time In</th>
                                <th>Time Out</th>
                                <th>Total Hours</th>
                                <th>Status (In/Out)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($a)
                            @foreach ($a as $v)
                                <tr>
                                    <td>{{ $v->date }}</td>
                                    <td>@php echo e(date('h:i:s A', strtotime($v->timein))) @endphp</td>
                                    <td>@php echo e(date('h:i:s A', strtotime($v->timeout))) @endphp</td>
                                    <td>
                                    @isset($v->totalhours)
                                        @if($v->totalhours != null) 
                                            @php
                                                if(stripos($v->totalhours, ".") === false) {
                                                    $h = $v->totalhours;
                                                } else {
                                                    $HM = explode('.', $v->totalhours); 
                                                    $h = $HM[0]; 
                                                    $m = $HM[1];
                                                }
                                            @endphp
                                        @endif
                                        @if($v->totalhours != null)
                                            @if(stripos($v->totalhours, ".") === false) 
                                                {{ $h }} hr
                                            @else 
                                                {{ $h }} hr {{ $m }} minutes
                                            @endif
                                        @endif
                                    @endisset
                                    </td>
                                    <td>
                                        @if($v->status_timein != '' && $v->status_timeout != '') 
                                            <span class="@if($v->status_timein == 'Late Arrival') orange @else blue @endif">{{ $v->status_timein }}</span> / 
                                            <span class="@if($v->status_timeout == 'Early Departure') red @else green @endif">{{ $v->status_timeout }}</span> 
                                        @elseif($v->status_timein == 'Late Arrival') 
                                            <span class="orange">{{ $v->status_timein }}</span>
                                        @else 
                                            <span class="blue">{{ $v->status_timein }}</span>
                                        @endif 
                                    </td>

                                </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
            </div>  
        </div>
        
    </div>

    @endsection
    
    @section('scripts')
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/i18n/datepicker.en.js') }}"></script>

    <script type="text/javascript">
    $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: false,});

    $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });

    $('#filterform').submit(function(event) {
        event.preventDefault();
        var date_from = $('#datefrom').val();
        var date_to = $('#dateto').val();
        var url = $("#_url").val();

        $.ajax({
            url: url + '/get/personal/attendance/',type: 'get',dataType: 'json',data: {datefrom: date_from, dateto: date_to},headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            success: function(response) {
                showdata(response);
                function showdata(jsonresponse) {
                    var employee = jsonresponse;
                    var tbody = $('#dataTables-example tbody');
                    
                    // clear data and destroy datatable
                    $('#dataTables-example').DataTable().destroy();
                    tbody.children('tr').remove();

                    // append table row data
                    for (var i = 0; i < employee.length; i++) {
                        var in_status = employee[i].status_timein;
                        var out_status = employee[i].status_timeout;
                        
                        function t_in_status(in_status) {
                            if(in_status == 'Late Arrival'){
                                return 'orange';
                            } else {
                                return 'blue';
                            }
                        }
                        
                        function t_out_status(out_status) {
                            if(out_status == 'Early Departure'){
                                return 'red';
                            } else {
                                return 'green';
                            }
                        }

                        function d_status(in_status, out_status) {
                            if(in_status != '' && out_status != '') {
                                return "<span class=' " + t_in_status(in_status) + "'>" +employee[i].status_timein+ "</span>" + ' / ' + "<span class='" + t_out_status(out_status) + "'>" +employee[i].status_timeout+ "</span>";
                            } else if (in_status != '' && out_status == '') {
                                return "<span class=' " + t_in_status(in_status) + "'>" +employee[i].status_timein+ "</span>";
                            } else {
                                return "";
                            }
                        }
                        var time_in = employee[i].timein;
                        var t_in = time_in.split(" ");
                        var time_out = employee[i].timeout;
                        var t_out = time_out.split(" ");

                        tbody.append("<tr>"+ 
                                        "<td>"+employee[i].date+"</td>" + 
                                        "<td>"+t_in[1]+" "+t_in[2]+"</td>" + 
                                        "<td>"+t_out[1]+" "+t_out[2]+"</td>" + 
                                        "<td>"+employee[i].totalhours+"</td>" + 
                                        "<td>"+ d_status(in_status, out_status) +"</td>" + 
                                    "</tr>");
                    }

                    // initialize datatable
                    $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: false,});
                }            
            }
        })
    });
    </script>
    @endsection 