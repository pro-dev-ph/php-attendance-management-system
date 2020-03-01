@extends('layouts.default')
    
    @section('content')

    <div class="container-fluid">
        <div class="row">
            <h2 class="page-title">EMPLOYEES
                <a class="ui positive button mini offsettop5 float-right" href="{{ url('employees/new') }}"><i class="ui icon plus"></i>Add</a>
            </h2>
        </div>

        <div class="row">
            <div class="box box-success">
                <div class="box-body">
                <table width="100%" class="table table-striped table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>ID #</th> 
                            <th>Employee</th> 
                            <th>Company</th>
                            <th>Department</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th class=""></th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($data)
                        @foreach ($data as $employee)
                            <tr class="">
                            <td>{{ $employee->idno }}</td>
                            <td>{{ $employee->lastname }}, {{ $employee->firstname }}</td>
                            <td>{{ $employee->company }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->jobposition }}</td>
                            <td>
                                @if($employee->employmentstatus == 'Active') Active @else Archived @endif
                            </td>
                            <td class="align-right">
                            <a href="{{ url('/profile/view/'.$employee->reference) }}" class="ui circular basic icon button tiny"><i class="file alternate outline icon"></i></a>
                            <a href="{{ url('/profile/edit/'.$employee->reference) }}" class="ui circular basic icon button tiny"><i class="edit outline icon"></i></a>
                            <a href="{{ url('/profile/delete/'.$employee->reference) }}" class="ui circular basic icon button tiny"><i class="trash alternate outline icon"></i></a>
                            <a href="{{ url('/profile/archive/'.$employee->reference) }}" class="ui circular basic icon button tiny"><i class="archive icon"></i></a>
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
        $('#dataTables-example').DataTable({responsive: true,pageLength: 10,lengthChange: false,searching: true,sorting: false,});
    });
    </script>
    @endsection