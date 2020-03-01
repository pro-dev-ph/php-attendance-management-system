@extends('layouts.default')
    
    @section('styles')
        
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Employee Profile
                    <a href="{{ url('employees') }}" class="ui basic blue button mini offsettop5 float-right"><i class="ui icon chevron left"></i>Return</a>
                </h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-4 float-left">
                <div class="box box-success">
                    <div class="box-body employee-info">
                            <div class="author">
                            @if($i != null)
                                <img class="avatar border-white" src="{{ asset('/assets/faces/'.$i) }}" alt="profile photo"/>
                            @else
                                <img class="avatar border-white" src="{{ asset('/assets/images/faces/default_user.jpg') }}" alt="profile photo"/>
                            @endif
                            </div>
                            <p class="description text-center">
                                <h4 class="title">@isset($p->firstname) {{ $p->firstname }} @endisset @isset($p->lastname) {{ $p->lastname }} @endisset</h4>
                                <table style="width: 100%" class="profile-tbl">
                                    <tbody>
                                        <tr>
                                            <td>Email</td>
                                            <td><span class="p_value">@isset($p->emailaddress) {{ $p->emailaddress }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile No.</td>
                                            <td><span class="p_value">@isset($p->mobileno) {{ $p->mobileno }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>ID No.</td>
                                            <td><span class="p_value">@isset($c->idno) {{ $c->idno }} @endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 float-left">
                <div class="box box-success">
                    <div class="box-header with-border">Personal Infomation</div>
                    <div class="box-body employee-info">
                            <table class="tablelist">
                                <tbody>
                                    <tr>
                                        <td><p>Civil Status</p></td>
                                        <td><p>@isset($p->civilstatus) {{ $p->civilstatus }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Age</p></td>
                                        <td><p>@isset($p->age) {{ $p->age }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Height <span class="help">(cm)</span></p></td>
                                        <td><p>@isset($p->height) {{ $p->height }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Weight <span class="help">(pounds)</span></p></td>
                                        <td><p>@isset($p->weight) {{ $p->weight }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Gender</p></td>
                                        <td><p>@isset($p->gender) {{ $p->gender }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Date of Birth</p></td>
                                        <td>
                                            <p>
                                                @isset($p->birthday) 
                                                    @php echo e(date("F d, Y", strtotime($p->birthday))) @endphp
                                                @endisset
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p>Place of Birth</p></td>
                                        <td><p>@isset($p->birthplace) {{ $p->birthplace }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Home Address</p></td>
                                        <td><p>@isset($p->homeaddress) {{ $p->homeaddress }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>National ID</p></td>
                                        <td><p>@isset($p->nationalid) {{ $p->nationalid }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h4 class="ui dividing header">Designation</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                        <td>@isset($c->company) {{ $c->company }} @endisset</td>
                                    </tr>
                                    <tr>
                                        <td><p>Department</p></td>
                                        <td><p>@isset($c->department) {{ $c->department }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>@isset($c->jobposition) {{ $c->jobposition }} @endisset</td>
                                    </tr>
                                    <tr>
                                        <td>Leave Privilege</td>
                                        <td>
                                            @isset($leavetype)
                                            @isset($leavegroup) 
                                            @isset($c->leaveprivilege)
                                                @foreach($leavegroup as $lg)
                                                    @if($lg->id == $c->leaveprivilege)
                                                        @php
                                                            $lp = explode(",", $lg->leaveprivileges);
                                                        @endphp
                                                        @foreach($lp as $rights) 
                                                            @foreach($leavetype as $lt)
                                                                @if($lt->id == $rights) {{ $lt->leavetype }}, @endif
                                                            @endforeach
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endisset
                                            @endisset
                                            @endisset
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p>Employment Type</p></td>
                                        <td><p>@isset($p->employmenttype) {{ $p->employmenttype }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Employement Status</p></td>
                                        <td><p>@isset($p->employmentstatus) {{ $p->employmentstatus }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Official Start Date</p></td>
                                        <td>
                                            <p>
                                            @isset($c->startdate) 
                                                @php echo e(date("F d, Y", strtotime($c->startdate))) @endphp
                                            @endisset
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><p>Date Regularized</p></td>
                                        <td>
                                            <p>
                                            @isset($c->dateregularized) 
                                                @php echo e(date("F d, Y", strtotime($c->dateregularized))) @endphp
                                            @endisset
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>

        </div><!-- end of row -->
    </div>

    @endsection
    
    @section('scripts')

    <script type="text/javascript">

    </script>
    @endsection 




