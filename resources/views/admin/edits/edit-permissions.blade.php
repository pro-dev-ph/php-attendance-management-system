@extends('layouts.default')

@section('styles')
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">Edit Permissions
                <a href="{{ url('users/roles') }}" class="ui basic blue button mini offsettop5 float-right"><i class="ui icon chevron left"></i>Return</a>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-content">
                    <form action="{{ url('users/roles/permissions/update') }}" class="ui form grid" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="eight wide column">
                            <div class="ui relaxed list">
                                <h3 class="ui sub header">Dashboard</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('1', $d)==true) checked @endif @endisset name="perms[]" value="1">
                                        <label>Open Dashboard page</label>
                                    </div>
                                </div>
                                <h3 class="ui sub header">Employees</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('2', $d)==true) checked @endif @endisset name="perms[]" value="2">
                                        <label>Open Employees page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('22', $d)==true) checked @endif @endisset name="perms[]" value="22">
                                                <label>View Employee profile</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('21', $d)==true) checked @endif @endisset name="perms[]" value="21">
                                                <label>Add Employee</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('23', $d)==true) checked @endif @endisset name="perms[]" value="23">
                                                <label>Edit Employee</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('24', $d)==true) checked @endif @endisset name="perms[]" value="24">
                                                <label>Delete Employee</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('25', $d)==true) checked @endif @endisset name="perms[]" value="25">
                                                <label>Archive Employee</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Attendances</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('3', $d)==true) checked @endif @endisset name="perms[]" value="3">
                                        <label>Open Attendances page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('31', $d)==true) checked @endif @endisset name="perms[]" value="31">
                                                <label>Edit Attendance</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('32', $d)==true) checked @endif @endisset name="perms[]" value="32">
                                                <label>Delete Attendance</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Schedules</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('4', $d)==true) checked @endif @endisset name="perms[]" value="4">
                                        <label>Open Schedules page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('41', $d)==true) checked @endif @endisset name="perms[]" value="41">
                                                <label>Add Schedule</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('42', $d)==true) checked @endif @endisset name="perms[]" value="42">
                                                <label>Edit Schedule</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('43', $d)==true) checked @endif @endisset name="perms[]" value="43">
                                                <label>Delete Schedule</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('44', $d)==true) checked @endif @endisset name="perms[]" value="44">
                                                <label>Archive Schedule</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Leave</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('5', $d)==true) checked @endif @endisset name="perms[]" value="5">
                                        <label>Open Leave page</label>
                                    </div>
                                    <div class="list">
                                        {{-- <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('51', $d)==true) checked @endif @endisset name="perms[]" value="51">
                                                <label><i class="icon"></i>Add Leave</label>
                                            </div>
                                        </div> --}}
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('52', $d)==true) checked @endif @endisset name="perms[]" value="52">
                                                <label>Edit Leave request</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('53', $d)==true) checked @endif @endisset name="perms[]" value="53">
                                                <label>Delete Leave request</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Settings</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('9', $d)==true) checked @endif @endisset name="perms[]" value="9">
                                        <label>Open Settings page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('91', $d)==true) checked @endif @endisset name="perms[]" value="91">
                                                <label>Update Settings</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Reports</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('7', $d)==true) checked @endif @endisset name="perms[]" value="7">
                                        <label>Open Reports page</label>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Users</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('8', $d)==true) checked @endif @endisset name="perms[]" value="8">
                                        <label>Open Users page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('81', $d)==true) checked @endif @endisset name="perms[]" value="81">
                                                <label>Add User</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('82', $d)==true) checked @endif @endisset name="perms[]" value="82">
                                                <label>Edit User</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('83', $d)==true) checked @endif @endisset name="perms[]" value="83">
                                                <label>Delete User</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">User Roles</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('10', $d)==true) checked @endif @endisset name="perms[]" value="10">
                                        <label>Open User roles page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('101', $d)==true) checked @endif @endisset name="perms[]" value="101">
                                                <label>Add Role</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('102', $d)==true) checked @endif @endisset name="perms[]" value="102">
                                                <label>Edit Role</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('103', $d)==true) checked @endif @endisset name="perms[]" value="103">
                                                <label>Set Permission</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('103', $d)==true) checked @endif @endisset name="perms[]" value="104">
                                                <label>Delete Role</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Companies</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('11', $d)==true) checked @endif @endisset name="perms[]" value="11">
                                        <label>Open Companies page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('111', $d)==true) checked @endif @endisset name="perms[]" value="111">
                                                <label>Add Company</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('112', $d)==true) checked @endif @endisset name="perms[]" value="112">
                                                <label>Delete Company</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Departments</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('12', $d)==true) checked @endif @endisset name="perms[]" value="12">
                                        <label>Open Departments page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('121', $d)==true) checked @endif @endisset name="perms[]" value="121">
                                                <label>Add Department</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('122', $d)==true) checked @endif @endisset name="perms[]" value="122">
                                                <label>Delete Department</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Job titles</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('13', $d)==true) checked @endif @endisset name="perms[]" value="13">
                                        <label>Open Job titles page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('131', $d)==true) checked @endif @endisset name="perms[]" value="131">
                                                <label>Add Job title</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('132', $d)==true) checked @endif @endisset name="perms[]" value="132">
                                                <label>Delete Job title</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Leave types</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('14', $d)==true) checked @endif @endisset name="perms[]" value="14">
                                        <label>Open Leave types page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('141', $d)==true) checked @endif @endisset name="perms[]" value="141">
                                                <label>Add Leave type</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('142', $d)==true) checked @endif @endisset name="perms[]" value="142">
                                                <label>Delete Leave type</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="ui sub header">Leave groups</h3>
                                <div class="item">
                                    <div class="ui master checkbox">
                                        <input type="checkbox" @isset($d) @if(in_array('15', $d)==true) checked @endif @endisset name="perms[]" value="15">
                                        <label>Open Leave groups page</label>
                                    </div>
                                    <div class="list">
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('151', $d)==true) checked @endif @endisset name="perms[]" value="151">
                                                <label>Add Leave group</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('152', $d)==true) checked @endif @endisset name="perms[]" value="152">
                                                <label>Edit Leave group</label>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="ui child checkbox slider">
                                                <input type="checkbox" @isset($d) @if(in_array('153', $d)==true) checked @endif @endisset name="perms[]" value="153">
                                                <label>Delete Leave group</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="box-footer">
                    <input type="hidden" value="@isset($id){{ $id }}@endisset" name="role_id">
                    <button class="ui positive approve small button" type="submit" name="submit"><i class="ui checkmark icon"></i>Set Permission</button>
                    <a href="{{ url('users/roles') }}" class="ui grey cancel small button"><i class="ui times icon"></i>Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $('.list .master.checkbox').checkbox({
        onChecked: function () {
            var
                $childCheckbox = $(this).closest('.checkbox').siblings('.list').find('.checkbox');
            $childCheckbox.checkbox('check');
        },
        onUnchecked: function () {
            var
                $childCheckbox = $(this).closest('.checkbox').siblings('.list').find('.checkbox');
            $childCheckbox.checkbox('uncheck');
        }
    });

    $('.list .child.checkbox').checkbox({
        fireOnInit: true,
        onChange: function () {
            var
                $listGroup = $(this).closest('.list'),
                $parentCheckbox = $listGroup.closest('.item').children('.checkbox'),
                $checkbox = $listGroup.find('.checkbox'),
                allChecked = true,
                allUnchecked = true;
            $checkbox.each(function () {
                if ($(this).checkbox('is checked')) {
                    allUnchecked = false;
                } else {
                    allChecked = false;
                }
            });
            if (allChecked) {
                $parentCheckbox.checkbox('set checked');
            } else if (allUnchecked) {
                $parentCheckbox.checkbox('set unchecked');
            } else {
                $parentCheckbox.checkbox('set indeterminate');
            }
        }
    });
</script>
@endsection