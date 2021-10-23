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
                    <a href="" class="btn btn-info text-light"><i class="fas fa-list"></i>
                        LIST OF SERVICE</a>
                    <a href="" class="btn btn-primary"><i class="fas fa-plus"></i>CREATE SERVICE</a>
                </p>
            </div>
        </div>
    </div>
</div>
<x-errors></x-errors>


@endsection

