@extends('layouts.user.app')
@section('user_content')

    <section>
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <h3>{{ $blog->title }}</h3>
                @php
                $image=json_decode($blog->image);
                @endphp
                @if($image)
                <img src="{{asset($image[0])}}" height="360px" width="100%" alt="">
                @else
                @endif

                <div class="">
                    <div class="card-header">

                        <div class="card-body">
                            <div>

                                {{ $blog->short_description }}

                                <br><br>

                                {{ $blog->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <h4>Recent Post</h4>
                <div class="row">
                    @foreach ($blogs as $item)
                    <div class="col-md-4 my-2">
                        @php
                        $image=json_decode($blog->image);
                        @endphp
                        @if($image)
                        <img src="{{asset($image[0])}}"  height="80px" width="100%" alt="">
                        @else
                        @endif

                    </div>
                    <div class="col-md-8 mt-4">
                        <p class="h5"><a href="{{ url('blog/detail',$item->id) }}">{{ $item->title }}</a></p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection
