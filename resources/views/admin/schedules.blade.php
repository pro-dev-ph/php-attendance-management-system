@extends('layouts.default')
    
    @section('styles')
    <link href="{{ asset('/assets/vendor/mdtimepicker/mdtimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    <style>
        .ui.active.modal {position: relative !important;}
        .datepicker {z-index: 999 !important;}
        .datepickers-container {z-index: 9999 !important;}
    </style>
    @endsection

    @section('content')
    @include('admin.modals.modal-add-schedule')
    
    <div class="container-fluid">
        <div class="row">
            <h2 class="page-title">Schedules
                <button class="ui positive button mini offsettop5 btn-add float-right"><i class="ui icon plus"></i>Add</button>
            </h2>
        </div>

        <div class="row">
            <div class="box box-success">
                <div class="box-body">
                    <table width="100%" class="table table-striped table-hover" id="dataTables-example" data-order='[[ 7, "desc" ]]'>
                        <thead>
                            <tr>
                                <th>ID #</th>
                                <th>Employee</th>
                                <th>Time <span class="help">(Start - Off)</span></th>
                                <th>Hours</th>
                                <th>Rest Day<span class="help">(s)</span></th>
                                <th>From <span class="help">(Date)</span></th>
                                <th>To <span class="help">(Date)</span></th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($schedules)
                            @foreach ($schedules as $sched)
                            <tr>
                                <td>{{ $sched->idno }}</td>
                                <td>{{ $sched->employee }}</td>
                                <td>{{ $sched->intime }} - {{ $sched->outime }}</td>
                                <td>{{ $sched->hours }} hours</td>
                                <td>{{ $sched->restday }}</td>
                                <td>@php echo e(date('D, M d, Y', strtotime($sched->datefrom))) @endphp</td>
                                <td>@php echo e(date('D, M d, Y', strtotime($sched->dateto))) @endphp</td>
                                <td>
                                    @if($sched->archive == '0') 
                                        <span class="green">Present</span>
                                    @else
                                        <span class="teal">Previous</span>
                                    @endif
                                </td>
                                <td class="align-right">
                                    @if($sched->archive == '0') 
                                        <a href="{{ url('/schedules/edit/'.$sched->id) }}" class="ui circular basic icon button tiny"><i class="icon edit outline"></i></a>
                                        <a href="{{ url('/schedules/delete/'.$sched->id) }}" class="ui circular basic icon button tiny"><i class="icon trash alternate outline"></i></a>
                                        <a href="{{ url('/schedules/archive/'.$sched->id) }}" class="ui circular basic icon button tiny"><i class="icon archive"></i></a>
                                    @else
                                        <a href="{{ url('/schedules/delete/'.$sched->id) }}" class="ui circular basic icon button tiny"><i class="icon trash alternate outline"></i></a>
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
    <script src="{{ asset('/assets/vendor/mdtimepicker/mdtimepicker.min.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: true,sorting: false,});
    });

    $('.jtimepicker').mdtimepicker({ format: 'h:mm:ss tt', hourPadding: true });
    $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });

    $('.ui.dropdown.getid').dropdown({ onChange: function(value, text, $selectedItem) {
        $('select[name="employee"] option').each(function() {
            if($(this).val()==value) {var id = $(this).attr('data-id');$('input[name="id"]').val(id);};
        });
    }});

    </script>
    @endsection 