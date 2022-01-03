@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-8">
            <div class="white-box">
                <h3 class="box-title m-b-0">Our Services</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Service Image</th>
                                <th>Service Name</th>
                                <th>Service Link</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($data as $msg)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src="{{asset($msg->service_image)}}" alt="" style="width:80px; height:80px;">
                                </td>
                                <td>{{$msg->service_name}}</td>
                                <td>{{$msg->service_link}}</td>
                                <td class="text-nowrap">
                                    <a href="{{route('edit.our.services', $msg->id)}}" data-toggle="tooltip"
                                        data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('delete.our.services', $msg->id)}}" data-toggle="tooltip"
                                    data-original-title="Delete"> <i class="fa fa-trash text-danger"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="white-box">
                <div class="row">
                    <h3 class="box-title m-b-0">Add Our Services</h3>
                    <div class="white-box">

                        <form action="{{route('create.our.services')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Image</label>
                                <input type="file" name="service_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input type="text" name="service_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Name"> </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Link</label>
                                <input type="text" name="service_link" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter Link"> </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection