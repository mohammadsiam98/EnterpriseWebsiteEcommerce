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
                        <h2 class="content-header-title float-start mb-0">DataTables</h2>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic table -->
            <section id="basic-datatable">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Details</th>
                                            <th>NID</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $key=>$suppliersDetails)
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{$key+1}}</span>
                                            </td>
                                            <td>{{$suppliersDetails->SupplierName}}</td>
                                            <td>{{$suppliersDetails->SupplierMobile}}</td>
                                            <td>{{$suppliersDetails->SupplierEmail}}</td>
                                            <td>{{$suppliersDetails->SupplierAddress}}</td>
                                            <td>{{$suppliersDetails->SupplierNationalIDCard}}</td>
                                            <td>
                                                {!!\Illuminate\Support\Str::limit($suppliersDetails->SupplierDetails,$limit=20,$end='.')!!}
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div>
                                                        <a class="btn btn-relief-primary" href="{{route('Suppliers.edit' , $suppliersDetails->id)}}">Edit</a>
                                                        <a class="btn btn-relief-danger" href="{{route('Suppliers.destroy' , $suppliersDetails->id)}}">Delete</a>
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

            </section>
            <!--/ Basic table -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
