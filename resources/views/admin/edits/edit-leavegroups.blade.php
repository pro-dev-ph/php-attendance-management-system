@extends('layouts.default')
    
    @section('content')

    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Edit Leave Group</h2>
        </div>    
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-content">
                <form id="edit_leavegroup_form" action="{{ url('fields/leavetype/leave-groups/update') }}" class="ui form" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
                    <div class="field">
                        <label>Leave Group name</label>
                        <input type="text" name="leavegroup" value="@isset($lg){{$lg->leavegroup}}@endisset" class="uppercase" placeholder="Enter Leave Group Name">
                    </div>
                    <div class="field">
                        <label>Description</label>
                        <input type="text" name="description" value="@isset($lg){{$lg->description}}@endisset" class="uppercase" placeholder="Enter Description for Leave Group">
                    </div>
                    <div class="field">
                        <label>Leave Privileges</label>
                        <select class="ui search dropdown selection multiple leaves uppercase" name="leaveprivileges[]" multiple="">
                            <option value="">Select Leave Privileges</option>
                            @isset($lt) 
                                @foreach($lt as $leave) 
                                    <option value="{{ $leave->id }}">{{ $leave->leavetype }}</option>
                                @endforeach
                            @endisset
                        </select>
                    </div>
                    <div class="field">
                        <label>Status</label>
                        <select class="ui dropdown uppercase" name="status">
                            <option value="">Select Status</option>
                            <option value="1" @isset($lg) @if($lg->status == 1) selected @endif @endisset>Active</option>
                            <option value="0" @isset($lg) @if($lg->status == 0) selected @endif @endisset>Disabled</option>
                        </select>
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
                <div class="box-footer">
                    <input type="hidden" name="id" value="@isset($lg){{$lg->id}}@endisset">
                    <button class="ui positive approve small button" type="submit" name="submit"><i class="ui checkmark icon"></i> Update</button>
                    <a href="{{ url('fields/leavetype/leave-groups') }}" class="ui black grey small button"><i class="ui times icon"></i> Cancel</a>
                </div>
                </form>
                
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('scripts')
    <script>
        var selected = "@isset($lg){{$lg->leaveprivileges}}@endisset";
        var items = selected.split(',');
        $('.ui.dropdown.multiple.leaves').dropdown('set selected', items);
    </script>
    @endsection