@extends('layouts.default')
    
    @section('styles')
        
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="box box-success col-md-6">
            <div class="box-header with-border">Delete Employee Account</div>
                <div class="box-body">
                    <form action="{{ url('profile/delete/employee') }}" class="ui form" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="@isset($id) {{$id}} @endisset">
                        <div class="field">
                            <div class="ui header" style="margin:0">Are you sure you want to delete this!</div>
                        </div>
                        <div class="field">
                            <p>Deleting this account also deletes the following data: Employee's Attendance, Schedules, Leaves, User account, or All records associated with this Employee.</p>
                        </div>
                        <div class="field">
                            <a href="{{ url('employees') }}" class="ui black deny button">No</a>
                            <button class="ui positive button approve" type="submit" name="submit"><i class="ui checkmark icon"></i>Yes</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">

    </script>
    @endsection 