@extends('layouts.adminDashboard_layout')
@section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')
@section('content')



<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-body">
            <!-- Validation -->
            <section class="bs-validation">
                <div class="row">
                    <!-- jQuery Validation -->
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Brands Edit</h4>
                            </div>
                            @include('alert.messages')
                            {{-- form start --}}
                            <div class="card-body">
                                <form action="{{route('brands.update',$Brands->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Brand Name</label>
                                        <input type="text" name="brandName" value="{{$Brands->brandName}}" id="basic-addon-name" class="form-control" placeholder="Enter a sub category name" aria-label="Name" style="font-size: 20px;" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Slug</label>
                                        <input type="text" name="slug" value="{{$Brands->slug}}" id="basic-addon-name" class="form-control" placeholder="Enter the slug of this sub category" aria-label="Name" style="font-size: 20px;" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Image</label>
                                        <input type="file" name="image" id="basic-addon-name" class="form-control" placeholder="Enter your image" aria-label="Name" aria-describedby="basic-addon-name" />
                                    </div>

                                    <div class="form-group row" style="padding-bottom: 20px;">
                                        <label class="form-label" for="basic-addon-name">Category List</label>
                                        <div class="col-md-12">
                                            <select class="form-control select2 form-select" name="category_id" data-style="btn-primary">
                                                <option value="">Select one category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{($category->id == $Brands->category->id) ? 'selected' : ''}}>{{$category->categoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" style="padding-bottom: 20px;">
                                        <label class="form-label" for="basic-addon-name">Sub Category List</label>
                                        <div class="col-md-12">
                                            <select class="form-control select2 form-select" name="subCategory_id" data-style="btn-primary">
                                                <option value="">Select one sub category</option>
                                                @foreach($subCategories as $Subcategory)
                                                <option value="{{$Subcategory->id}}" {{($Subcategory->id == $Brands->Subcategory->id) ? 'selected' : ''}}>{{$Subcategory->subCategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                                </form>
                            </div>
                            {{-- form end --}}
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
