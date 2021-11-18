@extends('layouts.user.app')
@section('user_content')
<br>
    <section class="container">
        <h4 class="bg-success text-center text-light">LIST OF APPOINMENTS</h4>
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
                        <span>Success</span>
                        <a class=""
                        href="@route('user_appointment.show', $item->id)"> <i class="btn btn-sm btn-rounded btn-primary fas fa-eye"></i> </a>
                        @else
                        <span>Pending</span>
                        @endif

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
    </section>
<br>
@endsection
