@extends('layouts.adminDashboard_layout')
@section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')
@section('content')


<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/semi-dark-layout.css')}}">


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Category Table</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('category.create')}}">
                                <h4 class="card-title">Create Category</h4>
                            </a>
                        </div>
                        @include('alert.messages')
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category_items as $key=>$category)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$key+1}}</span>
                                        </td>
                                        <td>{{$category->categoryName}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class=" pull-up my-0">
                                                    <img src="{{url($category->image)}}" style="height: 50px; width:auto" alt="Avatar">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div>
                                                    <a class="btn btn-relief-primary" href="{{route('category.edit' , $category->id)}}">Edit</a>
                                                    <a class="btn btn-relief-danger" href="{{route('category.destroy' , $category->id)}}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->
        </div>
    </div>
</div>
@endsection
<!-- END: Content-->
