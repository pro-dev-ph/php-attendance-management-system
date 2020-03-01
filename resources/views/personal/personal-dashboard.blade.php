@extends('layouts.personal')
    
    @section('styles')
        
    @endsection

    @section('content')
    
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <h2 class="page-title">Dashboard</h2>
            </div>    
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ui icon clock outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">ATTENDANCE <span class="text-hint">(Current Month)</span> </span>
                        <div class="progress-group">
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 100%"></div>
                            </div>
                            <div class="stats_d">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>Late Arrivals</td>
                                            <td><span class="bolder">@isset($la) {{ $la }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>Early Departures</td>
                                            <td><span class="bolder">@isset($ed) {{ $ed }} @endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ui icon user circle"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Present Schedule</span>
                        <div class="progress-group">
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                            </div>
                            <div class="stats_d">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>Time</td>
                                            <td><span class="bolder">@isset($cs->intime) {{ $cs->intime }} @endisset - @isset($cs->outime) {{ $cs->outime }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>Rest Days</td>
                                            <td><span class="bolder">@isset($cs->restday) {{ $cs->restday }} @endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-orange"><i class="ui icon home"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">LEAVES OF ABSENCE</span>
                        <div class="progress-group">
                            <div class="progress sm">
                                <div class="progress-bar progress-bar-orange" style="width: 100%"></div>
                            </div>
                            <div class="stats_d">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>Approved </td>
                                            <td><span class="bolder">@isset($al) {{ $al }} @endisset</span></td>
                                        </tr>
                                        <tr>
                                            <td>Pending </td>
                                            <td><span class="bolder">@isset($pl) {{ $pl }} @endisset</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recent Attendances</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped nobordertop">
                        <thead>
                            <tr>
                                <th class="text-left">Date</th>
                                <th class="text-left">Time</th>
                                <th class="text-left">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($a)
                            @foreach($a as $v)

                            @if($v->timein != '' && $v->timeout == '')
                            <tr>
                                <td>@php $date1 = date('M d, Y', strtotime($v->date)); @endphp
                                    {{ $date1 }}
                                </td>
                                <td>@php echo e(date('h:i:s A', strtotime($v->timein))) @endphp</td>
                                <td>Time-In</td>
                            </tr>
                            @endif
                            
                            @if($v->timein != '' && $v->timeout != '')
                            <tr>
                                <td>@php $date2 = date('M d, Y', strtotime($v->date)); @endphp
                                    {{ $date2 }}
                                </td>
                                <td>@php echo e(date('h:i:s A', strtotime($v->timeout))) @endphp</td>
                                <td>Time-Out</td>
                            </tr>
                            @endif

                            @if($v->timein != '' && $v->timeout != '')
                            <tr>
                                <td>@php $date3 = date('M d, Y', strtotime($v->date)); @endphp
                                    {{ $date3 }}
                                </td>
                                <td>@php echo e(date('h:i:s A', strtotime($v->timein))) @endphp</td>
                                <td>Time-In</td>
                            </tr>
                            @endif

                            @endforeach
                            @endisset
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Previous Schedules</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                    <table class="table table-striped nobordertop">
                        <thead>
                            <tr>
                                <th class="text-left">Time</th>
                                <th class="text-left">From Date / Until</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($ps)
                            @foreach($ps as $s)
                            <tr>
                                <td>{{ $s->intime }} - {{ $s->outime }}</td>
                                <td>
                                    @php 
                                        $date4 = date('M d',strtotime($s->datefrom)).' - '.date('M d, Y',strtotime($s->dateto)); 
                                    @endphp
                                    {{ $date4 }}
                                </td>
                            </tr>
                            @endforeach
                            @endisset
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recent Leaves of Absence</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                    <table class="table table-striped nobordertop">
                        <thead>
                            <tr>
                                <th class="text-left">Description</th>
                                <th class="text-left">Date</th>
                            </tr>
                        </thead>
                            <tbody>
                                @isset($ald)
                                @foreach($ald as $l)
                                <tr>
                                    <td>{{ $l->type }}</td>
                                    <td>
                                        @php
                                            $fd = date('M', strtotime($l->leavefrom));
                                            $td = date('M', strtotime($l->leaveto));

                                            if($fd == $td){
                                                $var = date('M d', strtotime($l->leavefrom)) .' - '. date('d, Y', strtotime($l->leaveto));
                                            } else {
                                                $var = date('M d', strtotime($l->leavefrom)) .' - '. date('M d, Y', strtotime($l->leaveto));
                                            }
                                        @endphp
                                        {{ $var }}
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
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
    

    </script>
    @endsection 