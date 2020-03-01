@extends('layouts.default')
    
    @section('styles')
        
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Update User</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="box box-success">
                    <div class="box-content">
                       
                        <form action="{{ url('user/update-profile') }}" class="ui form" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}

                        <div class="field">
                            <label>Name</label>
                            <input type="text" name="name" value="@isset($myuser->name){{ $myuser->name }}@endisset" class="uppercase">
                        </div>

                        <div class="field">
                            <label for="">Email</label>
                            <input type="email" name="email" value="@isset($myuser->email){{ $myuser->email }}@endisset" class="lowercase">
                        </div>

                        <div class="field">
                            <label for="">Role</label>
                        <input type="text" class="readonly uppercase" value="@isset($myrole){{ $myrole }}@endisset" readonly="" />
                        </div>

                        <div class="field">
                            <label for="">Status</label>
                            <input type="text" class="readonly uppercase" value="@isset($myuser->status)@if($myuser->status == 1)Enabled @else Disabled @endif @endisset" readonly="" />
                        </div>
                        
                    </div>
                    <div class="box-footer">
                            <button class="ui positive button" type="submit" name="submit"><i class="ui checkmark icon"></i> Update</button>
                            <a class="ui grey button" href="{{ url('dashboard') }}"><i class="ui times icon"></i> Cancel</a>
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