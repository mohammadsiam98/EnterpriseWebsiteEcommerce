@extends('layouts.adminDashboard_layout')
@section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')
@section('content')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Brand Details Table</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row column-search-datatable" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('subCategories.create')}}">
                                <h4 class="card-title">Create Brands</h4>
                            </a>
                        </div>
                        @include('alert.messages')
                        <div class="table-responsive card-datatable">
                            <table class="table table-hover dt-column-search">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Brand Name</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Brands as $key=>$brandDetails)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$key+1}}</span>
                                        </td>
                                        <td>{{$brandDetails->brandName}}</td>

                                        <td>
                                            <span class="badge rounded-pill badge-light-primary me-1">{{$brandDetails->category->categoryName }}</span>
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill badge-light-primary me-1">{{$brandDetails->SubCategory->subCategoryName }}</span>
                                        </td>
                                        <td>{{$brandDetails->slug}}</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class=" pull-up my-0">
                                                    <img src="{{url($brandDetails->image)}}" style="height: 50px; width:auto" alt="Avatar">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($brandDetails->status == 'inactive')
                                            <a href="{{ route('banner.status.active', $brandDetails->id) }}" class="btn btn-relief-success"> <b>Activate Banner</b> </a>
                                            @else
                                            <a href="{{ route('banner.status.inactive', $brandDetails->id) }}" class="btn btn-relief-danger"> <b>Disable Banner</b> </a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div>
                                                    <a class="btn btn-relief-primary" href="{{route('brands.edit' , $brandDetails->id)}}">Edit</a>
                                                    <a class="btn btn-relief-danger" href="{{route('brands.destroy' , $brandDetails->id)}}">Delete</a>
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
<!-- END: Content-->
@endsection
<!-- END: Content-->
