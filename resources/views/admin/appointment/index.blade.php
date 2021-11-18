@extends('layouts.admin.app')
@section('title', 'Appointments List')
@section('admin_content')
<x-breadcrumb data="Appointment List" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF APPOINTMENTS </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('appointment.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF APPOINTMENST</a>
                </p>
            </div>
        </div>
    </div>
</div>
<x-errors />
<x-alert />
<section class="card">
    <div class="card-header">
        <div class="card-body">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>index</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $item)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>
                                    @if ($item->status == 1)
                                    <a class="bg-success rounded" href="{{ url('appointment/status',$item->id) }}">Success</a>
                                    @else
                                    <a class="bg-danger rounded" href="{{ url('appointment/status',$item->id) }}">Pending</a>
                                    @endif

                                    <a class="btn btn-sm btn-rounded btn-primary"
                                    href="@route('appointment.show', $item->id)"> <i class="fas fa-eye"></i> </a>
                                    <form method="POST" action="@route('appointment.destroy',$item->id)">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-rounded btn-danger"><i
                                                class="fas fa-trash"></i></button>
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

</section>

@endsection
