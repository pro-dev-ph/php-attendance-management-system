@extends('layouts.default')
    
    @section('content')
    @include('admin.modals.modal-add-user')

    <div class="container-fluid">
        <div class="row">
            <h2 class="page-title">Users
            <button class="ui positive button mini offsettop5 btn-add float-right"><i class="ui icon plus"></i>Add</button>
            <a href="{{ url('users/roles') }}" class="ui blue button mini offsettop5 float-right"><i class="ui icon user"></i>Roles</a>
            </h2>
        </div>

        <div class="row">
            <div class="box box-success">
                <div class="box-body">
                    <table width="100%" class="table table-striped table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           @isset($users_roles)
                            @foreach ($users_roles as $val)
                            <tr>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->role_name }}</td>
                                <td> @if($val->acc_type == 2) Admin @else Employee @endif </td>
                                <td>
                                    <span>
                                    @if($val->status == '1') 
                                        Enabled
                                    @else
                                        Disabled
                                    @endif
                                    </span>
                                </td>
                                <td class="align-right">
                                    <a href="{{ url('/users/edit/'.$val->id) }}" class="ui circular basic icon button tiny"><i class="icon edit outline"></i></a>
                                    <a href="{{ url('/users/delete/'.$val->id) }}" class="ui circular basic icon button tiny"><i class="icon trash alternate outline"></i></a>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({responsive: true,pageLength: 15,lengthChange: false,searching: true,});
    });

    $('.ui.dropdown.getemail').dropdown({ onChange: function(value, text, $selectedItem) {
        $('select[name="name"] option').each(function() {
            if($(this).val()==value) {var e = $(this).attr('data-e');var r = $(this).attr('data-ref');$('input[name="email"]').val(e);$('input[name="ref"]').val(r);};
        });
    }});
    
    </script>
    @endsection