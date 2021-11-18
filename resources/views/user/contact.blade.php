@extends('layouts.user.app')
@section('user_content')

    <div class="container">
        <div>
            <p class="h4">Contact-Us</p>
        </div>

        <div class="my-4">
            <form action="@route('contact.store')" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-gorup">
                            <label for="">Enter Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" id="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-gorup">
                            <label for="">Enter Your E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your E-mail" id="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="form-gorup">
                            <label for="">Enter Your Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" id="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="14" rows="3"></textarea>
                </div>
                <div class="float-right">
                    <input type="submit" class="btn btn-primary" value="Submit" name="" id="">
                </div>
            </form>
        </div>
    </div>
<br><br><br><br>
@endsection
