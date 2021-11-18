@extends('layouts.admin.app')
@section('title', 'blog Create' )
@section('admin_content')
<x-breadcrumb data="Blog Create" />
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> <i class="fas fa-list"></i> CREATE BLOG </h3>
        <div class="card-tools">
            <div class="input-group form-inline input-group-sm" style="width: 100%;">
                <p class="form-inline">
                    <a href="@route('blog.index')" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF BLOG</a>
                    <a href="@route('blog.create')" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE
                        BLOG</a>
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
            @if(@$edit)
            <form action="@route('blog.update', $edit->id)" method="POST" enctype="multipart/form-data" class="form-group">
                @method('PUT')
            @else
            <form action="@route('blog.store')" method="POST" enctype="multipart/form-data" class="form-group">
            @endif
                @csrf
                <div class="">
                    <div class="">
                        <h3>Create About Blog</h3><hr>
                        <div class="form-group">
                            <label for="">Blog Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ @$edit->title }}" placeholder="Blog Title" id="">
                        </div>

                        <div class="form-group">
                            <label for="">Blog Image <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="image[]" multiple>
                        </div>
                        @php
                        $image=json_decode(@$edit->image);
                        @endphp
                        @if($image)
                           <span>Already Selected Image  </span> <img src="{{asset($image[0])}}" height="60px" width="60px" alt="">
                        @endif
                        <div class="form-group">
                            <label for="">Short Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="short_description" id="" cols="10" rows="3">{{ @$edit->short_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" id="" cols="15" rows="6">{{ @$edit->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Create New Dcotor" class="btn btn-primary" id="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
