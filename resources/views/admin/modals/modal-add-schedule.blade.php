<div class="ui modal add medium">
    <div class="header">Add New Schedule</div>
    <div class="content">
        <form id="add_schedule_form" action="{{ url('schedules/add') }}" class="ui form" method="post" accept-charset="utf-8">
        {{ csrf_field() }}
            <div class="field">
                <label>Employee</label>
                <select class="ui search dropdown getid uppercase" name="employee">
                    <option value="">Select Employee</option>
                    @isset($employee)
                    @foreach ($employee as $data)
                        <option value="{{ $data->lastname }}, {{ $data->firstname }}" data-id="{{ $data->id }}">{{ $data->lastname }}, {{ $data->firstname }}</option>
                    @endforeach
                    @endisset
                </select>
            </div>

            <div class="two fields">
                <div class="field">
                    <label for="">Start time</label>
                    <input type="text" placeholder="00:00:00 AM" name="intime" class="jtimepicker" />
                </div>
                <div class="field">
                    <label for="">Off time</label>
                    <input type="text" placeholder="00:00:00 PM" name="outime" class="jtimepicker" />
                </div>
            </div>

            <div class="field">
                <label for="">From</label>
                <input type="text" placeholder="Date" name="datefrom" id="datefrom" class="airdatepicker" />
            </div>
            <div class="field">
                <label for="">To</label>
                <input type="text" placeholder="Date" name="dateto" id="dateto" class="airdatepicker" />
            </div>

            <div class="eight wide field">
                <label for="">Total hours</label>
                <input type="number" placeholder="0" name="hours" />
            </div>

           <div class="grouped fields field">
                <label>Choose Rest day(s)</label>
                <div class="field">
                <div class="ui checkbox sunday">
                    <input type="checkbox" name="restday[]" value="Sunday">
                    <label>Sunday</label>
                </div>
                </div>
                <div class="field">
                <div class="ui checkbox ">
                    <input type="checkbox" name="restday[]" value="Monday">
                    <label>Monday</label>
                </div>
                </div>
                <div class="field">
                <div class="ui checkbox ">
                    <input type="checkbox" name="restday[]" value="Tuesday">
                    <label>Tuesday</label>
                </div>
                </div>
                <div class="field">
                <div class="ui checkbox ">
                    <input type="checkbox" name="restday[]" value="Wednesday">
                    <label>Wednesday</label>
                </div>
                </div>
                <div class="field">
                <div class="ui checkbox ">
                    <input type="checkbox" name="restday[]" value="Thursday">
                    <label>Thursday</label>
                </div>
                </div>
                <div class="field">
                <div class="ui checkbox ">
                    <input type="checkbox" name="restday[]" value="Friday">
                    <label>Friday</label>
                </div>
                </div>
                <div class="field" style="padding:0">
                <div class="ui checkbox saturday">
                    <input type="checkbox" name="restday[]" value="Saturday">
                    <label>Saturday</label>
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
        </div>
            
        <div class="actions">
            <input type="hidden" name="id" value="">
            <button class="ui positive small button" type="submit" name="submit"><i class="ui checkmark icon"></i> Save</button>
            <button class="ui grey small button cancel" type="button"><i class="ui times icon"></i> Cancel</button>
        </div>
        </form>  
</div>
