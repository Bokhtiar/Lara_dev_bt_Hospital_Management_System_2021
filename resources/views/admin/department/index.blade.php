@extends('layouts.admin.app')
@section('title', 'Department List')
@section('admin_content')
<x-breadcrumb data="Department List" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF DEPARTMENT </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('department.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF DEPARTMENT</a>
                    <a href="@route('department.create')" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE DEPARTMENT</a>
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
                        <p class="text-center">DEPARTMENT CREATE</p>
                    </div>
                    @if (@$edit)
                    <form class="form-group" method="POST" enctype="multipart/form-data" action="@route('department.update', $edit->id)">
                        @method('PUT')
                    @else
                    <form class="form-group" method="POST" enctype="multipart/form-data" action="@route('department.store')">
                        @method('POST')
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="">Service Name <span class="text-danger">*</span></label>
                            <input type="text" name="dep_name" class="form-control" placeholder="Department Name" required value="{{ @$edit->dep_name }}">
                        </div>

                        <div class="form-group">
                            <label for="">Department Short Description <span class="text-danger">*</span></label>
                            <textarea required name="dep_description" class="form-control" id="" cols="10" rows="3">{{ @$edit->dep_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary">
                        </div>

                    </form>
                </div>
                <div class="col-md-9 col-sm-12 col-lg-9">
                    <div class="bg-primary h3 rounded">
                        <p class="text-center">LIST OF DEPARTMENT</p>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <h3 class="container">List Of Department</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>index</th>
                                        <th>Department Name</th>
                                        <th>Department Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departments as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->dep_name}}</td>
                                        <td>{{$item->dep_description}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-rounded btn-success" href="@route('department.edit', $item->id)"> <i class="fas fa-user-edit"></i></a>
                                            <form method="POST" action="@route('department.destroy',$item->id)">
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
                                        <th>Department Name</th>
                                        <th>Department Description</th>
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

