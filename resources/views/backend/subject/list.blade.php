@extends('backend.layouts.app')


@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Subject</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE TITLE -->
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Subject</h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">


        <!-- START RESPONSIVE TABLES -->
        <div class="row">
            <div class="col-md-12">
                @include('_message')
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Search Subject</h3>
                    </div>

                    <div class="panel-body">

                        <form action="" method="get">
                            {{ csrf_field() }}

                            <div class="col-md-2">
                                <label>Id</label>
                                <input type="text" class="form-control" value="{{ Request::get('id')}}" placeholder="ID"
                                    name="id">
                            </div>
                            <div class="col-md-2">
                                <label>Subject Name</label>
                                <input type="text" class="form-control" value="{{ Request::get('name')}}"
                                    placeholder="Class Name" name="name">
                            </div>
                            <div class="col-md-2">
                                <label>Type</label>
                                <input type="text" class="form-control" value="{{ Request::get('type')}}"
                                    placeholder="Class Name" name="type">
                            </div>
                            <div class="col-md-2">
                                <label>Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">Select Status</option>
                                    <option {{ Request::get('status') == 1 ? 'selected' : ''}} value="1">Active</option>
                                    <option {{ Request::get('status') == 100 ? 'selected' : ''}} value="100">Inactive</option>
                                </select>
                            </div>
                            <div style="clear: both;"></div>
                            <br>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" value="Search">Search</button>
                                <a href="{{url('panel/subject')}}" class="btn btn-success">Reset</a>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Class List</h3>
                        <a class="btn btn-primary pull-right" href="{{url('panel/subject/create')}}">Create Subject</a>
                    </div>

                    <div class="panel-body panel-body-table">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Subject Name</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($getRecord as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->type}}</td>
                                            <td>
                                                @if ($value->status == 1)
                                                    <span class="label label-success">Active</span>
                                                @else
                                                    <span class="label label-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{date('d-m-Y H:i A', strtotime($value->created_at))}}
                                            </td>
                                            <td>
                                                <a href="{{url('panel/subject/edit/' . $value->id)}}"
                                                    class="btn btn-default btn-rounded btn-sm"><span
                                                        class="fa fa-pencil"></span></a>
                                                <a href="{{url('panel/subject/delete/' . $value->id)}}"
                                                    onclick="return confirm('Are you sure that you want to delete?');"
                                                    class="btn btn-danger btn-rounded btn-sm"><span
                                                        class="fa fa-times"></span></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div class="pull-right">
                    {{ $getRecord->appends(Request::all())->links() }}
                </div>

            </div>
        </div>
        <!-- END RESPONSIVE TABLES -->

        <!-- END PAGE CONTENT WRAPPER -->
    </div>
@endsection

@section('script')
@endsection