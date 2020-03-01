@extends('layouts.personal')
    
    @section('styles')
    <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    @endsection

    @section('content')

    <div class="container-fluid">
        <div class="row">
            <h2 class="page-title">Edit Leave</h2>
        </div>

        <div class="row">
            <div class="box box-success">
                <div class="box-body">

                <form id="edit_request_personal_leave_form" action="{{ url('personal/leaves/update') }}" class="ui form" method="post" accept-charset="utf-8">
                    {{ csrf_field() }}
                        
                        <div class="field">
                            <label>Leave Type</label>
                            <select class="ui dropdown uppercase" name="type">
                                @isset($lt))
                                @foreach ($lt as $data)
                                    <option value="{{ $data->leavetype }}" @if($data->leavetype == $type) selected @endif>{{ $data->leavetype }}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label for="">Leave from</label>
                                <input id="leavefrom" type="text" placeholder="Date" name="leavefrom" class="airdatepicker" value="@isset($l->leavefrom){{ $l->leavefrom }}@endisset"/>
                            </div>
                            <div class="field">
                                <label for="">Leave to</label>
                                <input id="leaveto" type="text" placeholder="Date" name="leaveto" class="airdatepicker" value="@isset($l->leaveto){{ $l->leaveto }}@endisset"/>
                            </div>
                        </div>
                        <div class="field">
                            <label for="">Return Date</label>
                            <input id="returndate" type="text" placeholder="Enter Return date" name="returndate" class="airdatepicker uppercase" value="@isset($l->returndate){{ $l->returndate }}@endisset"/>
                        </div>
                        <div class="field">
                            <label>Reason</label>
                            <textarea class="uppercase" rows="5" name="reason" value="@isset($l->reason){{ $l->reason }}@endisset">@isset($l->reason){{ $l->reason }}@endisset</textarea>
                        </div>
                        <div class="field">
                            <div class="ui error message">
                                <i class="close icon"></i>
                                <div class="header"></div>
                                <ul class="list">
                                    <li class=""></li>
                                </ul>
                            </div>
                        </div>
                        <div class="actions">
                            <input type="hidden" name="id" value="@isset($id){{ $id }}@endisset">
                            <button class="ui positive small button" type="submit" name="submit"><i class="ui checkmark icon"></i> Update</button>
                            <a href="{{ url('personal/leaves/view') }}" class="ui grey small button cancel"><i class="ui times icon"></i> Cancel</a>
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

    <script type="text/javascript">
        $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });
    </script>

    @endsection


