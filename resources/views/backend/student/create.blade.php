@extends('backend.layouts.app')


@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Student</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE TITLE -->
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Create Student</h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-12">

                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Create</strong> New Student</h3>
                        </div>
                        <div class="panel-body">

                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">School Name <span
                                            class="required"></span></label>
                                    <div class="col-md-6 col-xs-12">
                                        <select name="school_id" id="" class="form-control SchoolChange" required>
                                            <option value="">Select School</option>
                                            @foreach ($getSchoolAll as $schools)
                                                <option value="{{$schools->id}}">{{$schools->name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            @endif



                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">First Name <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"
                                                aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" name="name" required
                                            value="{{old('name')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('name')}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Last Name <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                        <input type="text" class="form-control" name="last_name" required
                                            value="{{old('last_name')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('last_name')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Admission Number <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa fa-sort-numeric-asc"></span></span>
                                        <input type="text" class="form-control" name="admission_number" required
                                            value="{{old('admission_number')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('admission_number')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Roll Number <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa fa-sort-numeric-asc"></span></span>
                                        <input type="text" class="form-control" name="roll_number" required
                                            value="{{old('roll_number')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('roll_number')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Class <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <select name="class_id" id="" class="form-control getClass" required>
                                        <option value="">Select</option>
                                        @foreach ($getClass as $class )
                                            <option value="{{$class->id}}">{{$class->name}}</option>
                                            
                                        @endforeach

                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Gender <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <select name="gender" id="" class="form-control" required>
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Date of Birth <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="date" class="form-control" name="date_of_birth" required
                                            value="{{old('date_of_birth')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('date_of_birth')}}</div>
                                </div>
                            </div>
                            


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Caste <span
                                        ></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa "></span></span>
                                        <input type="text" class="form-control" name="caste"
                                            value="{{old('caste')}}" />
                                    </div>
                                    <div >{{$errors->first('caste')}}</div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Religion <span
                                        ></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-id-card"></span></span>
                                        <input type="text" class="form-control" name="religion"
                                            value="{{old('religion')}}" />
                                    </div>
                                    <div >{{$errors->first('religion')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Mobile Number <span
                                        ></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                        <input type="text" class="form-control" name="mobile_number"
                                            value="{{old('mobile_number')}}" />
                                    </div>
                                    <div >{{$errors->first('mobile_number')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Admission Date <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="date" class="form-control" name="admission_date" required
                                            value="{{old('admission_date')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('admission_date')}}</div>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Profile Pic</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="file" class="form-control" style="padding: 5px" name="profile_pic">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Blood Group <span
                                        ></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                        <input type="text" class="form-control" name="blood_group"
                                            value="{{old('blood_group')}}" />
                                    </div>
                                    <div >{{$errors->first('blood_group')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Height <span
                                        ></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-header"></span></span>
                                        <input type="text" class="form-control" name="height"
                                            value="{{old('height')}}" />
                                    </div>
                                    <div >{{$errors->first('height')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Weight <span
                                        ></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-wikipedia-w"></span></span>
                                        <input type="text" class="form-control" name="weight"
                                            value="{{old('weight')}}" />
                                    </div>
                                    <div >{{$errors->first('weight')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Current Address <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id="" name="address"
                                        required>{{old('address')}}</textarea>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Permanent Address <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id="" name="permanent_address"
                                        required>{{old('permanent_address')}}</textarea>
                                </div>
                            </div>

                            
                            <hr>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Email <span class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-at"></span></span>
                                        <input type="text" class="form-control" name="email" required
                                            value="{{old('email')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('email')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Password <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                        <input type="password" class="form-control" name="password" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Status <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <select name="status" id="" class="form-control" required>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

@section('script')

        <script type="text/javascript">
            $('body').delegate('.SchoolChange', 'change', function(){
                var school_id = $(this).val();
                // alert(school_id);
                $.ajax({
                    url: "{{ url('panel/student/getclass')}}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        school_id: school_id
                    },
                    dataType: 'json',
                    success: function(response) {
                          $('.getClass').html(response.success);
                    }
                });
            });

        </script>

@endsection