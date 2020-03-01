@extends('layouts.default')

@section('content')
@include('admin.modals.modal-import-leavetypes')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">ADD LEAVE TYPE
                <a href="{{ url('fields/leavetype/leave-groups') }}" class="ui primary mini button offsettop5 float-right"><i class="icon calendar check outline"></i>Leave Groups</a>
                <button class="ui basic button mini offsettop5 btn-import float-right"><i class="ui icon upload"></i>Import</button>
                <a href="{{ url('export/fields/leavetypes' )}}" class="ui basic button mini offsettop5 btm-export float-right"><i class="ui icon download"></i>Export</a>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="box box-success">
                <div class="box-body">
                    <form id="add_leavetype_form" action="{{ url('fields/leavetype/add') }}" class="ui form" method="post"
                        accept-charset="utf-8">
                        {{ csrf_field() }}

                        <div class="field">
                            <label>Leave name <span class="help">e.g. "Vacation Leave, Sick Leave"</span></label>
                            <input class="uppercase" name="leavetype" value="" type="text">
                        </div>
                        <div class="field">
                            <label>Credits <span class="help">e.g. "15" (days)</span></label>
                            <input class="" name="limit" value="" type="text">
                        </div>
                        <div class="grouped fields opt-radio">
                            <label class="">Choose Term</label>
                            <div class="field">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="percalendar" value="Monthly" checked="checked">
                                    <label>Monthly</label>
                                </div>
                            </div>
                            <div class="field" style="padding:0px!important">
                                <div class="ui radio checkbox">
                                    <input type="radio" name="percalendar" value="Yearly">
                                    <label>Yearly</label>
                                </div>
                            </div>
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
                            <button type="submit" class="ui positive button small"><i class="ui icon check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box box-success">
                <div class="box-body">
                    <table width="100%" class="table table-striped table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Credits</th>
                                <th>Term</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                            @foreach ($data as $leavetype)
                            <tr>
                                <td>{{ $leavetype->leavetype }}</td>
                                <td>{{ $leavetype->limit }}</td>
                                <td>{{ $leavetype->percalendar }}</td>
                                <td class="align-right"><a href="{{ url('fields/leavetype/delete/'.$leavetype->id) }}"
                                        class="ui circular basic icon button tiny"><i class="icon trash alternate outline"></i></a></td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- DataTables JavaScript -->
<script src="{{ asset('/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true,
            searching: true,
            ordering: true,
            info: true,
            bLengthChange: false,
        });
    });

    function validateFile() {
        var f = document.getElementById("csvfile").value;
        var d = f.lastIndexOf(".") + 1;
        var ext = f.substr(d, f.length).toLowerCase();
        if (ext == "csv") {} else {
            document.getElementById("csvfile").value = "";
            $.notify({
                icon: 'ui icon times',
                message: "Please upload only CSV file format."
            }, {
                type: 'danger',
                timer: 400
            });
        }
    }
</script>

@endsection