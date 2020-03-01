@extends('layouts.default')
    
    @section('styles')
    <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/mdtimepicker/mdtimepicker.min.css') }}" rel="stylesheet">
    @endsection

    @section('content')

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Edit Schedule</h2>
        </div>    
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-content">
                <form id="edit_schedule_form" action="{{ url('schedules/update') }}" class="ui form" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
                    <div class="field">
                        <label>Employee</label>
                        <input type="text" value="@isset($s->employee){{ $s->employee }}@endisset" name="employee" class="readonly" readonly="" />
                    </div>

                    <div class="two fields">
                        <div class="field">
                            <label for="">Start time</label>
                            <input type="text" placeholder="00:00:00 AM" name="intime" class="jtimepicker" value="@isset($s->intime){{ $s->intime }}@endisset"/>
                        </div>
                        <div class="field">
                            <label for="">Off time</label>
                            <input type="text" placeholder="00:00:00 PM" name="outime" class="jtimepicker" value="@isset($s->outime){{ $s->outime }}@endisset"/>
                        </div>
                    </div>

                    <div class="field">
                        <label for="">From</label>
                        <input type="text" placeholder="Date" name="datefrom" class="airdatepicker" value="@isset($s->datefrom){{ $s->datefrom }}@endisset"/>
                    </div>
                    <div class="field">
                        <label for="">To</label>
                        <input type="text" placeholder="Date" name="dateto" class="airdatepicker" value="@isset($s->dateto){{ $s->dateto }}@endisset"/>
                    </div>

                    <div class="eight wide field">
                        <label for="">Hours</label>
                        <input type="text" placeholder="0" name="hours" value="@isset($s->hours){{ $s->hours }}@endisset"/>
                    </div>

                    <div class="grouped custom fields field">
                        <label>Rest day(s)</label>
                        <div class="field">
                        <div class="ui checkbox sunday @isset($r) @if(in_array('Sunday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Sunday" @isset($r) @if(in_array('Sunday', $r) == true) checked @endif @endisset>
                            <label>Sunday</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui checkbox @isset($r) @if(in_array('Monday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Monday" @isset($r) @if(in_array('Monday', $r) == true) checked @endif @endisset>
                            <label>Monday</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui checkbox @isset($r) @if(in_array('Tuesday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Tuesday" @isset($r) @if(in_array('Tuesday', $r) == true) checked @endif @endisset>
                            <label>Tuesday</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui checkbox @isset($r) @if(in_array('Wednesday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Wednesday" @isset($r) @if(in_array('Wednesday', $r) == true) checked @endif @endisset>
                            <label>Wednesday</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui checkbox @isset($r) @if(in_array('Thursday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Thursday" @isset($r) @if(in_array('Thursday', $r) == true) checked @endif @endisset>
                            <label>Thursday</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui checkbox @isset($r) @if(in_array('Friday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Friday" @isset($r) @if(in_array('Friday', $r) == true) checked @endif @endisset>
                            <label>Friday</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui checkbox saturday @isset($r) @if(in_array('Saturday', $r) == true) checked @endif @endisset">
                            <input type="checkbox" name="restday[]" value="Saturday" @isset($r) @if(in_array('Saturday', $r) == true) checked @endif @endisset>
                            <label>Saturday</label>
                        </div>
                        </div>
                    </div>
                    <div class="ui error message">
                        <i class="close icon"></i>
                        <div class="header"></div>
                        <ul class="list">
                            <li class=""></li>
                        </ul>
                    </div>
                </div>

                <div class="box-footer">
                    <input type="hidden" name="id" value="@isset($s->id){{ $s->id }}@endisset">
                    <button class="ui positive approve small button" type="submit" name="submit"><i class="ui checkmark icon"></i> Update</button>
                    <a href="{{ url('schedules') }}" class="ui black grey small button"><i class="ui times icon"></i> Cancel</a>
                </div>
                </form>
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
            $('#dataTables-example').DataTable({ responsive: true, pageLength: 15, lengthChange: false, });
        });

        $('.jtimepicker').mdtimepicker({ format: 'h:mm:ss tt', hourPadding: true });
        $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });
        
        $('.ui.dropdown.getid').dropdown({ onChange: function(value, text, $selectedItem) {
            $('select[name="employee"] option').each(function() {
                if($(this).val()==value) { var id = $(this).attr('data-id'); $('input[name="id"]').val(id); };
            });
        }});

    </script>
    @endsection