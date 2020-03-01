@extends('layouts.personal')
    
    @section('styles')
        
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Profile
                    <a href="{{ url('personal/profile/edit') }}" class="ui basic blue button mini offsettop5 float-right"><i class="ui icon edit"></i>Edit</a>
                </h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-4 float-left">
                <div class="box box-success">
                    <div class="box-body employee-info">
                            <div class="author">
                            @if($profile_photo != null)
                                <img class="avatar border-white" src="{{ asset('/assets/faces/'.$profile_photo) }}" alt="profile photo"/>
                            @else
                                <img class="avatar border-white" src="{{ asset('/assets/images/faces/default_user.jpg') }}" alt="profile photo"/>
                            @endif
                            </div>
                            <p class="description text-center">
                                <h4 class="title">@isset($profile->firstname) {{ $profile->firstname }} @endisset @isset($profile->lastname) {{ $profile->lastname }} @endisset</h4>
                                <table style="width: 100%" class="profile-tbl">
                                    <tbody>
                                        <tr>
                                            <td>Email</td>
                                            <td><span class="p_value">@isset($profile->emailaddress) {{ $profile->emailaddress }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile No.</td>
                                            <td><span class="p_value">@isset($profile->mobileno) {{ $profile->mobileno }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>ID No.</td>
                                            <td><span class="p_value">@isset($company_data->idno) {{ $company_data->idno }} @endisset</span></td>
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
                                        <td><p>@isset($profile->civilstatus) {{ $profile->civilstatus }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Age</p></td>
                                        <td><p>@isset($profile->age) {{ $profile->age }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Height <span class="help">(cm)</span></p></td>
                                        <td><p>@isset($profile->height) {{ $profile->height }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Weight <span class="help">(pounds)</span></p></td>
                                        <td><p>@isset($profile->weight) {{ $profile->weight }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Gender</p></td>
                                        <td><p>@isset($profile->gender) {{ $profile->gender }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Date of Birth</p></td>
                                        <td><p>
                                            @isset($profile->birthday) 
                                                @php echo e(date("F d, Y", strtotime($profile->birthday))) @endphp
                                            @endisset
                                        </p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Place of Birth</p></td>
                                        <td><p>@isset($profile->birthplace) {{ $profile->birthplace }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Home Address</p></td>
                                        <td><p>@isset($profile->homeaddress) {{ $profile->homeaddress }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>National ID</p></td>
                                        <td><p>@isset($profile->nationalid) {{ $profile->nationalid }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h4 class="ui dividing header">Designation</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Company</td>
                                        <td>@isset($company_data->company) {{ $company_data->company }} @endisset</td>
                                    </tr>
                                    <tr>
                                        <td><p>Department</p></td>
                                        <td><p>@isset($company_data->department) {{ $company_data->department }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td>Position</td>
                                        <td>@isset($company_data->jobposition) {{ $company_data->jobposition }} @endisset</td>
                                    </tr>
                                    <tr>
                                        <td>Leave Privilege</td>
                                        <td>
                                            @isset($leavetype)
                                            @isset($leavegroup) 
                                            @isset($company_data->leaveprivilege)
                                                @foreach($leavegroup as $lg)
                                                    @if($lg->id == $company_data->leaveprivilege)
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
                                        <td><p>@isset($profile->employmenttype) {{ $profile->employmenttype }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Employement Status</p></td>
                                        <td><p>@isset($profile->employmentstatus) {{ $profile->employmentstatus }} @endisset</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Official Start Date</p></td>
                                        <td><p>
                                            @isset($company_data->startdate) 
                                                @php echo e(date("F d, Y", strtotime($company_data->startdate))) @endphp
                                            @endisset
                                        </p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Date Regularized</p></td>
                                        <td><p>
                                            @isset($company_data->dateregularized) 
                                                @php echo e(date("F d, Y", strtotime($company_data->dateregularized))) @endphp
                                            @endisset
                                        </p></td>
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




