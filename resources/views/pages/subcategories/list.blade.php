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
                        <h2 class="content-header-title float-start mb-0">Sub Category Table</h2>
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
                                <h4 class="card-title">Create Sub Category</h4>
                            </a>
                        </div>
                        @include('alert.messages')
                        <div class="table-responsive card-datatable">
                            <table class="table table-hover dt-column-search">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Sub-category</th>
                                        <th>Category</th>
                                        <th>Slug</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subCategories as $key=>$subCategory)
                                    <tr>
                                        <td>
                                            <span class="fw-bold">{{$key+1}}</span>
                                        </td>
                                        <td>{{$subCategory->subCategoryName}}</td>

                                        <td>
                                            <span class="badge rounded-pill badge-light-primary me-1">{{$subCategory->category->categoryName }}</span></td>
                                        <td>{{$subCategory->slug}}</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class=" pull-up my-0">
                                                    <img src="{{url($subCategory->image)}}" style="height: 50px; width:auto" alt="Avatar">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div>
                                                    <a class="btn btn-relief-primary" href="{{route('subCategories.edit' , $subCategory->id)}}">Edit</a>
                                                    <a class="btn btn-relief-danger" href="{{route('subCategories.destroy' , $subCategory->id)}}">Delete</a>
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
