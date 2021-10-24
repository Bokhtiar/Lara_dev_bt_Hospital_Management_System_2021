@extends('layouts.admin.app')
@section('title', 'Doctor List')
@section('admin_content')
<x-breadcrumb data="Doctor List" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> LIST OF Doctor </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('doctor.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF DOCTOR</a>
                    <a href="@route('doctor.create')" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE
                        DOCTOR</a>
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
                                <th>Dcotor Name</th>
                                <th>Dcotor Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $item)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$item->doctor_name}}</td>
                                @php
                                $image=json_decode($item->doctor_image);
                                @endphp
                                @if($image)
                                <td><img src="{{asset($image[0])}}" height="60px" width="60px" alt=""> </td>
                                @else
                                <td><img src="{{ asset('admin/bb.jpg') }}" height="60px" width="60px" alt=""> </td>
                                @endif
                                <td>

                                    <a class="btn btn-sm btn-rounded btn-success"
                                        href="@route('doctor.edit', $item->id)"> <i class="fas fa-user-edit"></i></a>
                                    <a class="btn btn-sm btn-rounded btn-primary"
                                    href="@route('doctor.show', $item->id)"> <i class="fas fa-eye"></i> </a>
                                    <form method="POST" action="@route('doctor.destroy',$item->id)">
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
                                <th>Dcotor Name</th>
                                <th>Dcotor Image</th>
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
