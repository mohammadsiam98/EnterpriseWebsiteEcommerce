@extends('layouts.adminDashboard_layout')
@section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/css/elements/alert.css')}}">
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="page-header">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Terms & Condition</h4>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div id="modalOptionalSizes" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="text-center">
                                <!-- Lage modal -->
                                <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg">Instructions</button>
                            </div>


                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Read The Guidelines</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($TermsConditions==null)
            <div class="row">
                <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form action="{{route('termsConditions.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group mb-3">
                                    <h4>Plan Name</h4>
                                    <textarea id="my-editor" name="termsConditionsDetails" class="form-control" style="font-size:24px;"></textarea>
                                    <small id="planName" class="form-text text-muted">Write Your Terms & Conditions.</small>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3 btn-lg">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div class="widget-content widget-content-area">
                <div class="alert alert-arrow-left alert-icon-left alert-light-primary mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <strong>Warning!</strong> You have already inserted Total Achievements. Now you can only edit them.
                </div>
            </div>

            @endif
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

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
