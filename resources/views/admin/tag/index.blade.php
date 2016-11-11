@extends('layouts.admin_app')
@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Tags <small>>>Listing</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/tag/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i>New Tag
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                @include('admin.partials.errors')
                @include('admin.partials.success')

            </div>
        </div>
    </div>