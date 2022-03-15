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
                                <h4 class="card-title" style="text-align: center;">Privacy & Policies</h4>
                            </div>
                            @if($privacyDetails==null)
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{route('privacyPolicy.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-12">
                                                    <textarea id="my-editor" name="privacyPolicies" class="form-control" style="font-size:24px;"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-lg btn-primary me-1">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @else
                            <!-- Block Badges start -->
                            <div class="col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="badge d-block bg-primary">
                                            <span style="font-size: 25px; text-align:center">You have already inserted terms & conditions.Now you can only edit them</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Block Badges end -->
                            @endif
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
