@extends('layouts.admin.app')
@section('title', 'Service List')
@section('admin_content')
<x-breadcrumb data="Service List" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF SERVICE </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('service.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF SERVICE</a>
                    <a href="@route('service.create')" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE SERVICE</a>
                </p>
            </div>
        </div>
    </div>
</div>
<x-errors/>
<x-alert/>

<section class="card">
    <div class="card-header">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-lg-3">
                    <div class="bg-primary h3 rounded">
                        <p class="text-center">SERVICE CREATE</p>
                    </div>
                    @if (@$edit)
                    <form class="form-group" method="POST" enctype="multipart/form-data" action="@route('service.update', $edit->id)">
                        @method('PUT')
                    @else
                    <form class="form-group" method="POST" enctype="multipart/form-data" action="@route('service.store')">
                        @method('POST')
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="">Service Name <span class="text-danger">*</span></label>
                            <input type="text" name="service_name" class="form-control" placeholder="Service Name" required value="{{ @$edit->service_name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Service Image </label>
                            <input type="file" name="service_image[]" multiple class="form-control"  value="">
                        </div>
                        @php
                        $image=json_decode(@$item->service_image);
                        @endphp
                        @if($image)
                            <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                        @else
                        <label for="">Default Image</label>
                        <td><img src="{{ asset('admin/bb.jpg') }}" height="60px" width="60px" alt=""> </td>
                        @endif

                        <div class="form-group">
                            <label for="">Service Short Description <span class="text-danger">*</span></label>
                            <textarea required name="service_short_description" class="form-control" id="" cols="10" rows="3">{{ @$edit->service_short_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>

                    </form>
                </div>
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="bg-primary h3 rounded">
                        <p class="text-center">LIST OF SERVICE</p>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <h3 class="container">List Of colors</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>index</th>
                                        <th>Service Name</th>
                                        <th>Service Image</th>
                                        <th>Service Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->service_name}}</td>
                                        @php
                                        $image=json_decode($item->service_image);
                                        @endphp
                                        @if($image)
                                            <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                                        @else
                                        <td><img src="{{ asset('admin/bb.jpg') }}" height="60px" width="60px" alt=""> </td>
                                        @endif
                                        <td>{{$item->service_short_description}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-rounded btn-success" href="@route('service.edit', $item->id)"> <i class="fas fa-user-edit"></i></a>
                                            <form method="POST" action="@route('service.destroy',$item->id)">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-rounded btn-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>index</th>
                                        <th>Service Name</th>
                                        <th>Service Image</th>
                                        <th>Service Description</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--color list show -->
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

