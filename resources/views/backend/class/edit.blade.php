@extends('backend.layouts.app')


@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Class
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE TITLE -->
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Edit Class</h2>
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
                            <h3 class="panel-title"><strong>Edit</strong> Class</h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label class="col-md-3 col-xs-12 control-label">Name <span
                                        class="required"></span></label>
                                <div class="col-md-6 col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-home"></span></span>
                                        <input type="text" class="form-control" name="name" required
                                            value="{{old('name', $getRecord->name)}}" />
                                    </div>
                                    <div class="required">{{$errors->first('name')}}</div>
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
                            <button class="btn btn-primary pull-right">Update</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

@section('script')
@endsection