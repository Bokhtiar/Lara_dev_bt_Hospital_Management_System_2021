@extends('layouts.admin.app')
@section('title', 'Contact List')
@section('admin_content')
<x-breadcrumb data="Contact List" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF CONTACT </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('contact.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF CONTACT</a>
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
                <div class="">
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $item)
                                    <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{ $item->email }}</td>
                                        <th>{{ $item->phone }}</th>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            @if ($item->status == 1)
                                            <a class="bg-success rounded" href="{{ url('contact/status',$item->id) }}">Success</a>
                                            @else
                                            <a class="bg-danger rounded" href="{{ url('contact/status',$item->id) }}">Pending</a>
                                            @endif
                                            <form method="POST" action="@route('contact.destroy',$item->id)">
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Description</th>
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

