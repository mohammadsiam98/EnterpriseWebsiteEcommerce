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
                                <h4 class="card-title" style="text-align: center;">Supplier Details</h4>
                            </div>
                            {{-- @include('alert.messages') --}}
                            <div>
                                @if($errors->has('SupplierName'))
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert" style="padding: 8px; margin:30px;">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" /></svg>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>
                                        <strong>{{$errors->first('SupplierName')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div>
                                @if($errors->has('SupplierMobile'))
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert" style="padding: 8px; margin:30px;">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" /></svg>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>
                                        <strong>{{$errors->first('SupplierMobile')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>


                            <div>
                                @if($errors->has('SupplierEmail'))
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert" style="padding: 8px; margin:30px;">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" /></svg>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>
                                        <strong>{{$errors->first('SupplierEmail')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>


                            <div>
                                @if($errors->has('SupplierAddress'))
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert" style="padding: 8px; margin:30px;">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" /></svg>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>
                                        <strong>{{$errors->first('SupplierAddress')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div>
                                @if($errors->has('SupplierDetails'))
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert" style="padding: 8px; margin:30px;">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" /></svg>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>
                                        <strong>{{$errors->first('SupplierDetails')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div>
                                @if($errors->has('SupplierNationalIDCard'))
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert" style="padding: 8px; margin:30px;">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" /></svg>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <div>
                                        <strong>{{$errors->first('SupplierNationalIDCard')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div class="card-body">
                                <form class="form form-horizontal" action="{{route('Suppliers.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Name</label>
                                                    <input type="text" class="form-control" name="SupplierName" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Mobile</label>
                                                    <input type="text" class="form-control" name="SupplierMobile" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Email</label>
                                                    <input type="email" class="form-control" name="SupplierEmail" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Address</label>
                                                    <input type="text" class="form-control" name="SupplierAddress" style="font-size: 24px;">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <div class="col-sm-12"><label class="form-label" for="basic-addon-name">Supplier NID</label>
                                                    <input type="text" class="form-control" name="SupplierNationalIDCard" style="font-size: 24px;">
                                                </div>
                                            </div>

                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <label class="form-label" for="basic-addon-name">Supplier Details</label>
                                                    <textarea id="my-editor" name="SupplierDetails" class="form-control" style="font-size:24px;"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-lg btn-primary me-1">Submit</button>
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
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14
                , height: 14
            });
        }
    })

</script>
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
