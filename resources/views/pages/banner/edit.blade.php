@extends('layouts.adminDashboard_layout')
@section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')

@section('content')
<link href="{{asset('admin_assets/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="container">
            <div class="page-header">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Upload CLient's Company Images</h4>
                        </div>
                    </div>
                </div>
            </div>
            @include('alert.messages')

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
            <div class="row">
                <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form id="" action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}
                                <div class="form-group mb-3">
                                    <h4>Banner Name</h4>
                                    <input type="text" name="title" value="{{$banner->title}}" class="form-control" id="planName" aria-describedby="planName" placeholder="Write your banner title">
                                    <small id="planName" class="form-text text-muted">Write Your banner title in the Input Field.</small>
                                </div>

                                <div class="form-group mb-3">
                                    <h4>Banner Slug</h4>
                                    <input type="text" name="slug" value="{{$banner->slug}}" class="form-control" id="planName" aria-describedby="planName" placeholder="Write your banner slug">
                                    <small id="planName" class="form-text text-muted">Write Your banner slug in the Input Field.</small>
                                </div>

                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input type="file" name="image" value="" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>

                                <div class="form-group mb-3">
                                    <h4>Your's uploaded image</h4>
                                    <img src="{{url($banner->image)}}" alt="">
                                    <small id="planName" class="form-text text-muted">This is the image which you have uploaded.</small>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 btn-lg">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->


<script src="{{asset('admin_assets/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>
<script>
    var firstUpload = new FileUploadWithPreview('myFirstImage')

</script>

@endsection
