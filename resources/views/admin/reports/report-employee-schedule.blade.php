@extends('layouts.default')
    
    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <h2 class="page-title">Employee Schedule Report
                <a href="{{ url('reports') }}" class="ui basic blue button mini offsettop5 float-right"><i class="ui icon chevron left"></i>Return</a>
            </h2>
        </div>

        <div class="row">
            <div class="box box-success">
                <div class="box-body reportstable">
                    <form action="{{ url('export/report/schedule') }}" method="post" accept-charset="utf-8" class="ui small form form-filter" id="filterform">
                        {{ csrf_field() }}
                        <div class="inline three fields">
                            <div class="three wide field">
                                <select name="employee" class="ui search dropdown getid">
                                    <option value="">Employee</option>
                                    @isset($employee)
                                        @foreach($employee as $e)
                                            <option value="{{ $e->lastname }}, {{ $e->firstname }}" data-id="{{ $e->idno }}">{{ $e->lastname }}, {{ $e->firstname }}</option>
                                        @endforeach
                                    @endisset
                                </select>
                            </div>

                            <input type="hidden" name="emp_id" value="">
                            <button id="btnfilter" class="ui icon button positive small inline-button"><i class="ui icon filter alternate"></i> Filter</button>
                            <button type="submit" name="submit" class="ui icon button blue small inline-button"><i class="ui icon download"></i> Download</button>
                        </div>
                    </form>

                    <table width="100%" class="table table-striped table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Employee Name</th>
                                <th>Start Time</th>
                                <th>Off Time</th>
                                <th>Start Date </th>
                                <th>End Date</th>
                                <th>Hours</th>
                                <th>Rest Day<span class="help">(s)</span></th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($empSched)
                            @foreach ($empSched as $v)
                                <tr>
                                    <td>{{ $v->reference }}</td>
                                    <td>{{ $v->employee }}</td>
                                    <td>{{ $v->intime }}</td>
                                    <td>{{ $v->outime }}</td>
                                    <td>
                                        @php 
                                        $datefrom = date("l, F j, Y", strtotime($v->datefrom));
                                        @endphp 
                                        {{ $datefrom }}
                                    </td>
                                    <td>
                                        @php 
                                        $dateto = date("l, F j, Y", strtotime($v->dateto));
                                        @endphp 
                                        {{ $dateto }}
                                    </td>
                                    </td>
                                    <td>{{ $v->hours }}</td>
                                    <td>{{ $v->restday }}</td>
                                    <td>
                                        @if($v->archive == '0') 
                                            <span class="green">Present Schedule</span>
                                        @else
                                            <span class="teal">Past Schedule</span>
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

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({responsive: true,pageLength: 25,lengthChange: false,searching: false,sorting: false,});
    });
    
    // transfer idno 
    $('.ui.dropdown.getid').dropdown({ onChange: function(value, text, $selectedItem) {
        $('select[name="employee"] option').each(function() {
            if($(this).val()==value) {var id = $(this).attr('data-id');$('input[name="emp_id"]').val(id);};
        });
    }});

    $('#btnfilter').click(function(event) {
        event.preventDefault();
        var emp_id = $('input[name="emp_id"]').val();
        var date_from = $('#datefrom').val();
        var date_to = $('#dateto').val();
        var url = $("#_url").val();

        $.ajax({
            url: url + '/get/employee-schedules/',type: 'get',dataType: 'json',data: {id: emp_id},headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },

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
                        var datefrom = employee[i].datefrom;
                        var dateto = employee[i].dateto;
                        function f_date(format_date)
                        {
                            date = new Date(format_date);
                            year = date.getFullYear();
                            month = date.getMonth();
                            months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                            d = date.getDate();
                            day = date.getDay();
                            days = new Array('Sunday,', 'Monday,', 'Tuesday,', 'Wednesday,', 'Thursday,', 'Friday,', 'Saturday,');
                            
                            n_date = days[day]+' '+months[month]+' '+d+', '+year;
                            return n_date; // Friday, May 11, 2018
                        }

                        var a = employee[i].archive;
                        function s(a) {
                            if (a == '0') {
                                return '<span class="green">Present Schedule</span>';
                            } else {
                                return '<span class="teal">Past Schedule</span>';
                            }
                        }

                        tbody.append("<tr>" + 
                                            "<td>"+employee[i].reference+"</td>" + 
                                            "<td>"+employee[i].employee+"</td>" + 
                                            "<td>"+employee[i].intime+"</td>" + 
                                            "<td>"+employee[i].outime+"</td>" + 
                                            "<td>"+ f_date(datefrom) +"</td>" + 
                                            "<td>"+ f_date(dateto) +"</td>" + 
                                            "<td>"+employee[i].hours+"</td>" + 
                                            "<td>"+employee[i].restday+"</td>" + 
                                            "<td>"+ s(a) +"</td>" + 
                                    "</tr>");
                    }

                    // initialize datatable
                    $('#dataTables-example').DataTable({responsive: true,pageLength: 25,lengthChange: false,searching: false,sorting: false,});
                }            
            }
        })
    });
    </script>
    @endsection 