@extends('layouts.personal')
    
    @section('styles')
    <link href="{{ asset('/assets/vendor/air-datepicker/dist/css/datepicker.min.css') }}" rel="stylesheet">
    @endsection

    @section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Edit Profile
                    <a href="{{ url('personal/profile/view') }}" class="ui basic blue button mini offsettop5 float-right"><i class="ui icon chevron left"></i>Return</a>
                </h2>
            </div>    
        </div>

        <div class="row">
            <form id="edit_personal_info_form" action="{{ url('personal/profile/update') }}" class="ui form custom" method="post" accept-charset="utf-8">
            {{ csrf_field() }}

                <div class="col-md-12 float-left">
                    <div class="box box-success">
                        <div class="box-header with-border">Personal Infomation</div>
                        <div class="box-body">
                            <div class="two fields">
                                <div class="field">
                                    <label>First Name</label>
                                    <input type="text" class="uppercase" name="firstname" value="@isset($person_details->firstname){{ $person_details->firstname }}@endisset">
                                </div>
                                <div class="field">
                                    <label>Middle Name</label>
                                    <input type="text" class="uppercase" name="mi" value="@isset($person_details->mi){{ $person_details->mi }}@endisset">
                                </div>
                            </div>
                            <div class="field">
                                <label>Last Name</label>
                                <input type="text" class="uppercase" name="lastname" value="@isset($person_details->lastname){{ $person_details->lastname }}@endisset">
                            </div>
                            <div class="field">
                                <label>Gender</label>
                                <select name="gender" class="ui dropdown uppercase">
                                    <option value="">Select Gender</option>
                                    <option value="MALE" @isset($person_details->gender) @if($person_details->gender == 'MALE') selected @endif @endisset>MALE</option>
                                    <option value="FEMALE" @isset($person_details->gender) @if($person_details->gender == 'FEMALE') selected @endif @endisset>FEMALE</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Civil Status</label>
                                <select name="civilstatus" class="ui dropdown uppercase">
                                    <option value="">Select Civil Status</option>
                                    <option value="SINGLE" @isset($person_details->civilstatus) @if($person_details->civilstatus == 'SINGLE') selected @endif @endisset>SINGLE</option>
                                    <option value="MARRIED" @isset($person_details->civilstatus) @if($person_details->civilstatus == 'MARRIED') selected @endif @endisset>MARRIED</option>
                                    <option value="ANULLED" @isset($person_details->civilstatus) @if($person_details->civilstatus == 'ANULLED') selected @endif @endisset>ANULLED</option>
                                    <option value="WIDOWED" @isset($person_details->civilstatus) @if($person_details->civilstatus == 'WIDOWED') selected @endif @endisset>WIDOWED</option>
                                    <option value="LEGALLY SEPARATED" @isset($person_details->civilstatus) @if($person_details->civilstatus == 'LEGALLY SEPARATED') selected @endif @endisset>LEGALLY SEPARATED</option>
                                </select>
                            </div>

                            <div class="two fields">
                                <div class="field">
                                    <label>Height <span class="help">(cm)</span></label>
                                    <input type="text" name="height" value="@isset($person_details->height){{ $person_details->height }}@endisset" placeholder="000">
                                </div>
                                <div class="field">
                                    <label>Weight <span class="help">(pounds)</span></label>
                                    <input type="text" name="weight" value="@isset($person_details->weight){{ $person_details->weight }}@endisset" placeholder="000">
                                </div>
                            </div>
                            
                            <div class="two fields">
                            <div class="field">
                                <label>Email Address (Personal)</label>
                                <input type="email" name="emailaddress" value="@isset($person_details->emailaddress){{ $person_details->emailaddress }}@endisset"  class="lowercase">
                            </div>
                            <div class="field">
                                <label>Mobile Number</label>
                                <input type="text" class="uppercase" name="mobileno" value="@isset($person_details->mobileno){{ $person_details->mobileno }}@endisset">
                            </div>
                            </div>
                            <div class="two fields">
                            <div class="field">
                                <label>Age</label>
                                <input type="text" name="age" value="@isset($person_details->age){{ $person_details->age }}@endisset" placeholder="00">
                            </div>
                            <div class="field">
                                <label>Date of Birth</label>
                                <input type="text" name="birthday" value="@isset($person_details->birthday){{ $person_details->birthday }}@endisset" class="airdatepicker" placeholder="Date">
                            </div>
                            </div>
                            <div class="field">
                                <label>Place of Birth</label>
                                <input type="text" class="uppercase" name="birthplace" value="@isset($person_details->birthplace){{ $person_details->birthplace }}@endisset" placeholder="City, Province, Country">
                            </div>
                            <div class="field">
                                <label>Home Address</label>
                                <input type="text" class="uppercase" name="homeaddress" value="@isset($person_details->homeaddress){{ $person_details->homeaddress }}@endisset" placeholder="House/Unit Number, Building, Street, City, Province, Country">
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
                            <br>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 float-left">
                    <div class="action align-right">
                        <button type="submit" name="submit" class="ui green button small"><i class="ui checkmark icon"></i> Update</button>
                        <a href="{{ url('personal/dashboard') }}" class="ui grey small button cancel"><i class="ui times icon"></i> Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection


    @section('scripts')
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/air-datepicker/dist/js/i18n/datepicker.en.js') }}"></script>
    <script type="text/javascript">
        $('.airdatepicker').datepicker({ language: 'en', dateFormat: 'yyyy-mm-dd' });
    </script>
    @endsection