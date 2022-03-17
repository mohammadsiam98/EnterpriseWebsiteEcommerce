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
                                @if($errors->any)
                                <ul>
                                    @foreach($errors as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>

                            <div class="card-body">
                                <form id="" action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Title</label>
                                        <input type="text" name="title" value="{{$banner->title}}" id="basic-addon-name" class="form-control" placeholder="Enter the title of your slider" aria-label="Name" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Slug</label>
                                        <input type="text" name="slug" value="{{$banner->slug}}" id="basic-addon-name" class="form-control" placeholder="Enter the slug of this title" aria-label="Name" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Image</label>
                                        <input type="file" name="image" id="basic-addon-name" class="form-control" placeholder="Enter your image" aria-label="Name" aria-describedby="basic-addon-name" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-addon-name">Your Uploaded Image</label>
                                        <img src="{{url($banner->image)}}" style="height: 50px; width:auto;" alt="">
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

@endsection
