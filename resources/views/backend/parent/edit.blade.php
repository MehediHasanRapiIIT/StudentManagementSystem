@extends('backend.layouts.app')


@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Parent</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE TITLE -->
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Edit Parent</h2>
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
                            <h3 class="panel-title"><strong>Edit</strong> New Parent</h3>
                        </div>
                        <div class="panel-body">



                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">First Name <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-user"
                                                aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" name="name" required
                                            value="{{old('name', $getRecord->name)}}" />
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
                                            value="{{old('last_name', $getRecord->last_name)}}" />
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
                                        <option {{($getRecord->gender == "Male") ? 'selected' : '' }} value="Male">Male</option>
                                        <option {{($getRecord->gender == "Female") ? 'selected' : '' }} value="Female">Female</option>

                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Mobile Number <span></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-briefcase"
                                                aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" name="mobile_number"
                                            value="{{old('mobile_number', $getRecord->mobile_number)}}" />
                                    </div>
                                    <div class="mobile_number">{{$errors->first('mobile_number')}}</div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Occupation <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-briefcase"
                                                aria-hidden="true"></span></span>
                                        <input type="text" class="form-control" name="occupation" required
                                            value="{{old('occupation', $getRecord->occupation)}}" />
                                    </div>
                                    <div class="required">{{$errors->first('occupation')}}</div>
                                </div>
                            </div>

                            
                            

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Profile Pic</label>
                                <div class="col-md-6 col-xs-12">
                                    <input type="file" class="form-control" style="padding: 5px" name="profile_pic">
                                    @if (!empty($getRecord->getProfile()))
                                        <img style="width: 50px; height: 50px; border-radius:50%;"
                                            src="{{ $getRecord->getProfile()}}">
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Current Address <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id="" name="address"
                                        required>{{old('address', $getRecord->address)}}</textarea>
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Permanent Address <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <textarea class="form-control" id="" name="permanent_address"
                                        required>{{old('permanent_address', $getRecord->permanent_address)}}</textarea>
                                </div>
                            </div>

                            
                            <hr>

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Email <span class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-at"></span></span>
                                        <input type="text" class="form-control" name="email" required
                                            value="{{old('email', $getRecord->email)}}" />
                                    </div>
                                    <div class="required">{{$errors->first('email')}}</div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Password <span></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                        <input type="text" class="form-control" name="password"/>
                                    </div>
                                    (Leave blank if you don't want to change password)
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Status <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <select name="status" id="" class="form-control" required>
                                        <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Active</option>
                                        <option {{ ($getRecord->status == 0) ? 'selected' : '' }}value="0">Inactive</option>

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