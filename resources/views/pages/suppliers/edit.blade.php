@extends('layouts.adminDashboard_layout')
@section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')
@section('content')


<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

</style>

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="text-align: center;">Supplier Details Edit</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{route('Suppliers.update',$suppliers->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class=" row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Name</label>
                                                    <input type="text" class="form-control" name="SupplierName" value="{{$suppliers->SupplierName}}" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Mobile</label>
                                                    <input type="text" class="form-control" name="SupplierMobile" value="{{$suppliers->SupplierMobile}}" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Email</label>
                                                    <input type="email" class="form-control" name="SupplierEmail" value="{{$suppliers->SupplierEmail}}" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Address</label>
                                                    <input type="text" class="form-control" name="SupplierAddress" value="{{$suppliers->SupplierAddress}}" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12"><label class="form-label" for="basic-addon-name">Supplier NID</label>
                                                    <input type="text" class="form-control" name="SupplierNationalIDCard" value="{{$suppliers->SupplierNationalIDCard}}" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <textarea id="my-editor" name="SupplierDetails" class="form-control" style="font-size:24px;">{{ $suppliers->SupplierDetails }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-lg btn-primary me-1">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Horizontal form layout section end -->
        </div>
    </div>
</div>
<!-- END: Content-->


<script src="//cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images'
        , filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token='
        , filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        , filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    CKEDITOR.replace('my-editor', options);

</script>
@endsection
