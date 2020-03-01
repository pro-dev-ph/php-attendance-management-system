@extends('layouts.default')

@section('content')
@include('admin.modals.modal-import-jobtitle')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-title">ADD JOB TITLE
                <button class="ui basic button mini offsettop5 btn-import float-right"><i class="ui icon upload"></i>
                    Import</button>
                <a href="{{ url('export/fields/jobtitle' )}}" class="ui basic button mini offsettop5 btm-export float-right"><i
                        class="ui icon download"></i> Export</a>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="box box-success">
                <div class="box-body">

                    <form id="add_jobtitle_form" action="{{ url('fields/jobtitle/add') }}" class="ui form" method="post"
                        accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="field">
                            <label>Department</label>
                            <select name="department" class="ui search dropdown getdeptcode">
                                <option value="">Select Department</option>
                                @isset($d)
                                @foreach ($d as $dept)
                                <option value="{{ $dept->department }}" data-id="{{ $dept->id }}"> {{ $dept->department
                                    }}</option>
                                @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="field">
                            <label>Job Title <span class="help">e.g. "Operations Manager"</span></label>
                            <input class="uppercase" name="jobtitle" value="" type="text" value="">
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
                            <input type="hidden" name="dept_code" value="">
                            <button type="submit" class="ui positive button small"><i class="ui icon check"></i> Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="box box-success">
                <div class="box-body">
                    <table width="100%" class="table table-striped table-hover" id="dataTables-example" data-order='[[ 1, "asc" ]]'>
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                            @foreach ($data as $j)
                            <tr>
                                <td>{{ $j->jobtitle }}</td>
                                <td>
                                    @isset($d)
                                    @foreach($d as $dept)
                                    @if($j->dept_code == $dept->id)
                                    {{ $dept->department }}
                                    @endif
                                    @endforeach
                                    @endisset
                                </td>
                                <td class="align-right"><a href="{{ url('fields/jobtitle/delete/'.$j->id) }}" class="ui circular basic icon button tiny"><i
                                            class="icon trash alternate outline"></i></a></td>
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

    $('.ui.dropdown.getdeptcode').dropdown({
        onChange: function (value, text, $selectedItem) {
            $('select[name="department"] option').each(function () {
                if ($(this).val() == value) {
                    var id = $(this).attr('data-id');
                    $('input[name="dept_code"]').val(id);
                };
            });
        }
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