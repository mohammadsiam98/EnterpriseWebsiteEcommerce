 @extends('layouts.adminDashboard_layout')
 @section('StarTech', 'Leading Computer, Laptop & Gadget Shop in Bangladesh')

 @section('content')
 <link href="{{asset('admin_assets/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
 <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
 <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/plugins/table/datatable/datatables.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/css/forms/theme-checkbox-radio.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/plugins/table/datatable/dt-global_style.css')}}">
 <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/plugins/table/datatable/custom_dt_custom.css')}}">
 <!-- END PAGE LEVEL CUSTOM STYLES -->

 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
     <div class="layout-px-spacing">

         <div class="page-header">
             <nav class="breadcrumb-one" aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                     <li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                     <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Custom</a></li>
                 </ol>
             </nav>
         </div>


         <div class="row layout-spacing">
             <div class="col-lg-12">
                 <div class="statbox widget box box-shadow">
                     <div class="widget-content widget-content-area">
                         <table id="style-3" class="table style-3  table-hover">
                             <thead>
                                 <tr>
                                     <th class="checkbox-column text-center"> Record Id </th>
                                     <th class="text-center">Banner Title</th>
                                     <th class="text-center">Banner Slug</th>
                                     <th class="text-center">Banner Image</th>
                                     <th class="text-center dt-no-sorting">Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($banner as $key=>$slider)
                                 <tr>
                                     <td class="checkbox-column text-center"> {{$key+1}} </td>
                                     <td class="text-center">{{$slider->title}}</td>
                                     <td class="text-center">{{$slider->slug}}</td>
                                     <td class="text-center">
                                         <img src="{{url($slider->image)}}" style="height: 100px; width:100px" alt="">
                                     </td>
                                     <td class="text-center">
                                         <ul class="table-controls">
                                             <li><a href="{{route('banner.edit' , $slider->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                         <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                     </svg></a></li>
                                             <li><a href="{{ route('banner.destroy', $slider->id) }}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                         <polyline points="3 6 5 6 21 6"></polyline>
                                                         <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                     </svg></a></li>
                                         </ul>
                                     </td>
                                 </tr>
                                 @endforeach

                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>

     </div>
     <div class="footer-wrapper">
         <div class="footer-section f-section-1">
             <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
         </div>
         <div class="footer-section f-section-2">
             <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                     <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                 </svg></p>
         </div>
     </div>
 </div>
 <!--  END CONTENT AREA  -->
 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="{{asset('admin_assets/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
 <script src="{{asset('admin_assets/bootstrap/js/popper.min.js')}}"></script>
 <script src="{{asset('admin_assets/bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('admin_assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
 <script src="{{asset('admin_assets/assets/js/app.js')}}"></script>

 <script>
     $(document).ready(function() {
         App.init();
     });

 </script>
 <script src="{{asset('admin_assets/assets/js/custom.js')}}"></script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->

 <!-- BEGIN PAGE LEVEL SCRIPTS -->
 <script src="{{asset('admin_assets/plugins/table/datatable/datatables.js')}}"></script>
 <script>
     c3 = $('#style-3').DataTable({
         "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
             "<'table-responsive'tr>" +
             "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>"
         , "oLanguage": {
             "oPaginate": {
                 "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>'
                 , "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
             }
             , "sInfo": "Showing page _PAGE_ of _PAGES_"
             , "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>'
             , "sSearchPlaceholder": "Search..."
             , "sLengthMenu": "Results :  _MENU_"
         , }
         , "stripeClasses": []
         , "lengthMenu": [5, 10, 20, 50]
         , "pageLength": 5
     });

     multiCheck(c3);

 </script>
 <!-- END PAGE LEVEL SCRIPTS -->

 @endsection
