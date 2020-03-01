@extends('layouts.default')
    
    @section('content')

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Edit Leave</h2>
        </div>    
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-content">
                <form id="edit_leave_form" action="{{ url('leaves/update') }}" class="ui form" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
                    <div class="field">
                        <label>Employee</label>
                        <input type="text" class="readonly" readonly="" value="@isset($l->employee){{ $l->employee }}@endisset">
                    </div>
                    <div class="field">
                        <label>Leave Type</label>
                        <input type="text" class="readonly" readonly="" value="@isset($l->type){{ $l->type }}@endisset">
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label for="">Leave From</label>
                            <input type="text" class="readonly" readonly="" value="@isset($l->leavefrom){{ $l->leavefrom }}@endisset"/>
                            
                        </div>
                        <div class="field">
                            <label for="">Leave To</label>
                            <input type="text" class="readonly" readonly="" value="@isset($l->leaveto){{ $l->leaveto }}@endisset"/>
                        </div>
                    </div>
                    <div class="field">
                        <label for="">Return Date</label>
                        <input id="returndate" type="text" class="readonly" readonly="" value="@isset($l->returndate){{ $l->returndate }}@endisset"/>
                    </div>
                    <div class="field">
                        <label>Reason</label>
                        <textarea class="uppercase readonly" readonly="" rows="5">@isset($l->reason){{ $l->reason }}@endisset</textarea>
                    </div>
                    <div class="field">
                        <p class="ui horizontal divider tiny sub header">Manager Privilege</p>
                    </div>
                    <div class="field">
                        <label>Status</label>
                        <select class="ui dropdown uppercase" name="status">
                            <option value="Approved" @isset($l->status) @if($l->status == 'Approved') selected @endif @endisset>Approved</option>
                            <option value="Pending" @isset($l->status) @if($l->status == 'Pending') selected @endif @endisset>Pending</option>
                            <option value="Declined" @isset($l->status) @if($l->status == 'Declined') selected @endif @endisset>Declined</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Add Comment <span class="help">(OPTIONAL)</span></label>
                        <textarea name="comment" class="uppercase" rows="5">@isset($l->comment){{ $l->comment }}@endisset</textarea>
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
                    <input type="hidden" class="readonly" readonly="" name="id" value="@isset($l->id){{ $l->id }}@endisset">
                    <button class="ui positive small button" type="submit" name="submit"><i class="ui checkmark icon"></i> Update</button>
                    <a href="{{ url('leaves') }}" class="ui black grey small button"><i class="ui times icon"></i> Cancel</a>
                </div>
                </form>
                
                </div>
            </div>
        </div>
    </div>

    @endsection
