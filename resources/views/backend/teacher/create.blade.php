@extends('backend.layouts.app')


@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Teacher</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE TITLE -->
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Create Teacher</h2>
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
                            <h3 class="panel-title"><strong>Create</strong> New Teacher</h3>
                        </div>
                        <div class="panel-body">

                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                                <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">School Name <span
                                            class="required"></span></label>
                                    <div class="col-md-6 col-xs-12">
                                        <select name="school_id" id="" class="form-control" required>
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
                                <label class="col-md-3 col-xs-12 control-label">Date of Joining <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="date" class="form-control" name="date_of_joining" required
                                            value="{{old('date_of_joining')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('date_of_joining')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Mobile Number <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                        <input type="text" class="form-control" name="mobile_number" required
                                            value="{{old('mobile_number')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('mobile_number')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Marital Status <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-child"></span></span>
                                        <input type="text" class="form-control" name="marital_status" required
                                            value="{{old('marital_status')}}" />
                                    </div>
                                    <div class="required">{{$errors->first('marital_status')}}</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Profile Pic</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="file" class="form-control" style="padding: 5px" name="profile_pic">
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

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Qualification <span></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id=""
                                        name="qualification">{{old('qualification')}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Work Experience <span></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id=""
                                        name="work_experience">{{old('work_experience')}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Note <span></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id="" name="note">{{old('note')}}</textarea>
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
@endsection