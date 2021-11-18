@extends('layouts.admin.app')
@section('title', 'Blog List')
@section('admin_content')
<x-breadcrumb data="Blog List" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF BLOG </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('blog.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF BLOG</a>
                    <a href="@route('blog.create')" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE BLOG</a>
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
            <div class="">
                <div>
                    <div class="bg-primary h3 rounded">
                        <p class="text-center">LIST OF BLOG</p>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <h3 class="container">List Of Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>index</th>
                                        <th>Title</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->title}}</td>
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
                                        <th>Title</th>
                                        <th>image</th>
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

