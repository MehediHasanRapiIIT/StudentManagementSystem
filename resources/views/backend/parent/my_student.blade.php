@extends('backend.layouts.app')


@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Parent My Student</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- PAGE TITLE -->
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Parent My Student</h2>
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
                        <h3 class="panel-title">Search Student</h3>
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
                                <label>First Name</label>
                                <input type="text" class="form-control" value="{{ Request::get('name')}}"
                                    placeholder="First Name" name="name">
                            </div>
                            <div class="col-md-2">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="{{ Request::get('last_name')}}"
                                    placeholder="Last Name" name="last_name">
                            </div>
                            

                            <div class="col-md-2">
                                <label>Email</label>
                                <input type="text" class="form-control" value="{{ Request::get('email')}}"
                                    placeholder="Email" name="email">
                            </div>
                            
                            <div style="clear: both;"></div>
                            <br>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" value="Search">Search</button>
                                <a href="{{url('panel/parent/my-student/'.$parent_id)}}" class="btn btn-success">Reset</a>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Search Student List</h3>
                    </div>
                    
                    <div class="panel-body panel-body-table">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Parent Name</th>
                                        <th>Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty(Request::get('id')) || !empty(Request::get('name')) || !empty(Request::get('last_name')) || !empty(Request::get('email')))
                                    @forelse($getMyStudent as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>
                                                @if (!empty($value->getProfile()))
                                                    <img style="width: 50px; height: 50px; border-radius:50%;"
                                                        src="{{ $value->getProfile()}}">
                                                @endif
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->last_name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->gender}}</td>
                                            <td>
                                                @if(!empty($value->getParentData))
                                                    {{$value->getParentData->name}} {{$value->getParentData->last_name}}
                                                @endif
                                            </td>
                                            <td>
                                                {{date('d-m-Y H:i A', strtotime($value->created_at))}}
                                            </td>
                                            <td>
                                                
                                                <a href="{{url('panel/parent/add-student/' . $value->id.'/'. $parent_id)}}"
                                                    class="btn btn-primary btn-sm">Add to Parent</a></a>
                                                
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%">No Data Found</td>
                                        </tr>
                                    @endforelse

                                    @else
                                        <tr>
                                            <td colspan="100%">Record Not Found</td>
                                        </tr>

                                    @endif

                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="panel-heading">
                        <h3 class="panel-title">My Student List</h3>
                    </div>

                    <div class="panel-body panel-body-table">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-actions">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Profile</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($getRecord as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>
                                                @if (!empty($value->getProfile()))
                                                    <img style="width: 50px; height: 50px; border-radius:50%;"
                                                        src="{{ $value->getProfile()}}">
                                                @endif
                                            </td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->last_name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->gender}}</td>
                                            <td>
                                                {{date('d-m-Y H:i A', strtotime($value->created_at))}}
                                            </td>
                                            <td>
                                                
                                                <a href="{{url('panel/parent/my-student-delete/' . $value->id)}}"
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
                

            </div>
        </div>
        <!-- END RESPONSIVE TABLES -->

        <!-- END PAGE CONTENT WRAPPER -->
    </div>
@endsection

@section('script')
@endsection