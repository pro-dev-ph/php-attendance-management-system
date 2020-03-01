@extends('layouts.personal')
    
    @section('styles')
        <script>var admin = false;</script>
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">General Settings</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

            <div class="box box-success">
                <div class="box-body">
                            
                    <div class="ui secondary blue pointing tabular menu">
                        <a class="item active" data-tab="about">About</a>
                        <a class="item" data-tab="attribution">Attributions</a>
                    </div>
                    
                    <div class="ui tab active" data-tab="about">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <p class="license col-md-6" style="margin-bottom:0">
                                    <h3 style="margin-top:0" class="ui header">Timely Sheets: Attendance Management System</h3>
                                    <p>Timely Sheets is a Time and Attendance platform designed to help HR in managing employee attendance life cycle from time tracking to scheduling and understand the true value of their Human Resources.</p>

                                    <h4 class="ui header">Timely Sheets' smarter approach to Time and Attendance</h4>
                                    <ul>
                                        <li>Engage your people everywhere on their preferred devices.</li>
                                        <li>Take action and respond to changes on the fly.</li>
                                        <li>Use one version of a single system across your entire organization.</li>
                                        <li>Make better business decisions based on contextual insights.</li>
                                        <li>Get a full view of talent, attendance, and schedule with Timely Sheets software.</li>
                                    </ul>
                                    <div class="footer-text">
                                        <div class="sub header">Version 1.0</div>
                                        <div class="sub header">Copyright (c) 2019 Brian Luna. All rights reserved.</div>
                                    </div>
                                </p>

                                <div class="ui section divider"></div>
                                <h4 class="ui header">Send Feedback
                                    <div class="sub header">Write your feedback and send to our developer email mr.brianluna@gmail.com</div>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="ui tab" data-tab="attribution">
                        <div class="tab-content">
                        <h3 class="ui header">Legal Notice
                        <div class="sub header">Copyright (c) 2019 Brian Luna. All rights reserved.</div>
                        </h3>

                        <h5 class="ui header">Laravel
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) Taylor Otwell
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Bootstrap
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2011-2018 Twitter, Inc.
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Semantic UI
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2015 Semantic Org
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
                            SOFTWARE.
                        </p>

                        <h5 class="ui header">jQuery JavaScript Library
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright jQuery Foundation and other contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">DataTables
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2008-2018 SpryMedia Ltd
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Chart.js
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright 2018 Chart.js Contributors
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">Air Datepicker
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2016 Timofey Marochkin
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>

                        <h5 class="ui header">MDTimePicker
                        <div class="sub header">The MIT License (MIT)</div>
                        </h5>
                        <p class="license col-md-6">
                            Copyright (c) 2017 Dionlee Uy
                            <br><br>
                            Permission is hereby granted, free of charge, to any person obtaining a copy
                            of this software and associated documentation files (the "Software"), to deal
                            in the Software without restriction, including without limitation the rights
                            to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
                            copies of the Software, and to permit persons to whom the Software is
                            furnished to do so, subject to the following conditions:
                            <br><br>
                            The above copyright notice and this permission notice shall be included in
                            all copies or substantial portions of the Software.
                            <br><br>
                            THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
                            IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
                            FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
                            AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
                            LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
                            OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
                            THE SOFTWARE.
                        </p>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
        $('.menu .item').tab();
    </script>
    @endsection 