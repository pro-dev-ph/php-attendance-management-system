<div class="ui modal medium add">
    <div class="header">Request Leave</div>
    <div class="content">
        <form id="request_personal_leave_form" action="{{ url('personal/leaves/request') }}" class="ui form" method="post"
            accept-charset="utf-8">
            {{ csrf_field() }}

            <div class="field">
                <label>Leave Type</label>
                <select class="ui dropdown uppercase getid" name="type">
                    <option value="">Select Type</option>
                    @isset($lt)
                        @foreach ($lt as $data)
                            @foreach($rights as $p)
                                @if($p == $data->id)
                                <option value="{{ $data->leavetype }}" data-id="{{ $data->id }}">{{ $data->leavetype }}</option>
                                @endif
                            @endforeach
                        @endforeach
                    @endisset
                </select>
            </div>

            <div class="two fields">
                <div class="field">
                    <label for="">Leave from</label>
                    <input id="leavefrom" type="text" placeholder="Start date" name="leavefrom" class="airdatepicker uppercase" />
                </div>
                <div class="field">
                    <label for="">Leave to</label>
                    <input id="leaveto" type="text" placeholder="End date" name="leaveto" class="airdatepicker uppercase" />
                </div>
            </div>
            <div class="field">
                <label for="">Return date</label>
                <input id="returndate" type="text" placeholder="Enter Return date" name="returndate" class="airdatepicker uppercase" />
            </div>
            <div class="field">
                <label>Reason</label>
                <textarea class="uppercase" rows="5" name="reason" value=""></textarea>
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
    </div>
    <div class="actions">
        <input type="hidden" name="typeid" value="">
        <button class="ui positive small button" type="submit" name="submit"><i class="ui checkmark icon"></i> Send Request</button>
        <button class="ui grey small button cancel" type="button"><i class="ui times icon"></i> Cancel</button>
    </div>
    </form>
</div>