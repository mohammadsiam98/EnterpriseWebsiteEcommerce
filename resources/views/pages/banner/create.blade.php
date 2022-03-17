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
                                <h4 class="card-title">Banner Insert</h4>
                            </div>
                            <div>
                                @if($errors->has('title'))
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
                                        <strong>{{$errors->first('title')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>


                            <div>
                                @if($errors->has('slug'))
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
                                        <strong>{{$errors->first('slug')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div>
                                @if($errors->has('image'))
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
                                        <strong>{{$errors->first('image')}}</strong>
                                    </div>

                                </div>
                                @endif
                            </div>

                            <div class="card-body">
                                <form id="" action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Title</label>
                                        <input type="text" name="title" id="basic-addon-name" class="form-control" placeholder="Enter the title of your slider" aria-label="Name" style="font-size: 20px;" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Slug</label>
                                        <input type="text" name="slug" id="basic-addon-name" class="form-control" placeholder="Enter the slug of this title" aria-label="Name" style="font-size: 20px;" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Image</label>
                                        <input type="file" name="image" id="basic-addon-name" class="form-control" placeholder="Enter your image" aria-label="Name" aria-describedby="basic-addon-name" />
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /jQuery Validation -->
                </div>
            </section>
            <!-- /Validation -->

        </div>
    </div>
</div>
<!-- END: Content-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
