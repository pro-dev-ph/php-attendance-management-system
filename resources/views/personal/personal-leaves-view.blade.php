@extends('layouts.personal')
    
    @section('styles')
    <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    <style>
        .ui.active.modal {position: relative !important;}
        .datepicker {z-index: 999 !important; }
        .datepickers-container {z-index: 9999 !important;}
    </style>
    @endsection

    @section('content')
    @include('personal.modals.modal-request-leave')
    @include('personal.modals.modal-view-leave')

    <div class="container-fluid">
        <div class="row">
            <h2 class="page-title">My Leave
                <button class="ui positive button mini offsettop5 btn-add float-right"><i class="icon plus"></i>REQUEST LEAVE</button>
            </h2>
        </div>

        <div class="row">
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

                    <table width="100%" class="table table-striped table-bordered table-hover delegation" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Leave Type</th>
                                <th>Leave From</th>
                                <th>Leave To</th>
                                <th>Reason</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($l)
                            @foreach ($l as $data)
                            <tr>
                                <td>{{ $data->type }}</td>
                                <td>{{ $data->leavefrom }}</td>
                                <td>{{ $data->leaveto }}</td>
                                <td>{{ $data->reason }}</td>
                                <td>{{ $data->returndate }}</td>
                                <td><span class="">{{ $data->status }}</span></td>
                                <td>
                                    @if($data->status == 'Approved')
                                        <button type="button" class="ui button icon mini teal view" data-id="{{ $data->id }}"><i class="ui icon file alternate"></i> View</button>
                                    @else
                                        <a href="{{ url('personal/leaves/edit/'.$data->id) }}" class="ui blue icon mini basic button"><i class="ui icon edit"></i> Edit</a>
                                        <a href="{{ url('personal/leaves/delete/'.$data->id) }}" class="ui red icon mini basic button"><i class="ui icon trash"></i> Delete</a>
                                        @isset($data->comment)
                                            <button data-id="{{ $data->id }}" class="ui grey icon mini basic button uppercase" data-tooltip='{{ $data->comment }}' data-variation='wide' data-position='top right'><i class="ui icon comment alternate"></i></button>
                                        @endisset
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
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/i18n/datepicker.en.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: false,});
        });

        $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });

        $('.ui.dropdown.getid').dropdown({ onChange: function(value, text, $selectedItem) {
            $('select[name="type"] option').each(function() {
                if($(this).val()==value) { var id = $(this).attr('data-id'); $('input[name="typeid"]').val(id); };
            });
        }});
        
        $('#filterform').submit(function(event) {
            event.preventDefault();
            var date_from = $('#datefrom').val();
            var date_to = $('#dateto').val();
            var url = $("#_url").val();

            $.ajax({
                url: url + '/get/personal/leaves/',type: 'get',dataType: 'json',data: {datefrom: date_from, dateto: date_to},headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
                success: function(response) {
                    console.log(response);
                    
                    showdata(response);
                    function showdata(jsonresponse) {
                        var leave = jsonresponse;
                        var tbody = $('#dataTables-example tbody');

                        // clear data and destroy datatable
                        $('#dataTables-example').DataTable().destroy();
                        tbody.children('tr').remove();

                        // append table row data
                        for (var i = 0; i < leave.length; i++) {
                            var ls = leave[i].status;
                            function actions(ls) {
                                if (ls == 'Approved') {
                                    return "<button type='button' data-id='"+leave[i].id+"'"+ "class='ui button icon mini teal view'><i class='ui icon file alternate'></i> View</button>";
                                } else {
                                    if (leave[i].comment !== null) {
                                        return "<a href='"+url+"/personal/leaves/edit/"+leave[i].id+"'"+ "class='ui basic blue icon mini button'><i class='ui icon edit'></i> Edit</a>"+
                                           "<a href='"+url+"/personal/leaves/delete/"+leave[i].id+"'"+ "class='ui basic red icon mini button'><i class='ui icon trash'></i> Delete</a>"+
                                           "<button type='button' data-id='"+leave[i].id+"'"+ "class='ui basic grey icon mini button comment' data-tooltip='"+leave[i].comment+"' data-variation='wide' data-position='top right'><i class='ui icon comment alternate'></i></button>";
                                    } else {
                                        return "<a href='"+url+"/personal/leaves/edit/"+leave[i].id+"'"+ "class='ui basic blue icon mini button'><i class='ui icon edit'></i> Edit</a>"+
                                           "<a href='"+url+"/personal/leaves/delete/"+leave[i].id+"'"+ "class='ui basic red icon mini button'><i class='ui icon trash'></i> Delete</a>";
                                    }
                                }
                            }
                            tbody.append("<tr>"+ 
                                            "<td>"+leave[i].type+"</td>" + 
                                            "<td>"+leave[i].leavefrom+"</td>" + 
                                            "<td>"+leave[i].leaveto+"</td>" + 
                                            "<td>"+leave[i].reason+"</td>" + 
                                            "<td>"+leave[i].returndate+"</td>" + 
                                            "<td>"+leave[i].status+"</td>" + 
                                            "<td>"+ actions(ls) +"</td>" + 
                                        "</tr>");
                        }

                        // initialize datatable
                        $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: false,});
                    }            
                }
            })
        });

    $(".delegation").on("click", ".view", function () {
        // parent delegation 
        var id = $(this).attr('data-id'); 
        var url = $("#_url").val();
        
        $.ajax({
            url: url + '/view/personal/leave/',type: 'get',dataType: 'json',data: {id: id},headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
            success: function(response) {
                console.log(response);
                $('.employee').val(response.employee);
                $('.leavetype').val(response.type);
                $('.leavefrom').val(response.leavefrom);
                $('.leaveto').val(response.leaveto);
                $('.returndate').val(response.returndate);
                $('.reason').text(response.reason);
                $('.status').val(response.status);
                $('.ui.modal.view').modal('toggle');
            }
        })
    });

    </script>
    @endsection