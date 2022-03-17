@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible" style="padding: 8px; margin:30px;">
    <strong>Error!</strong> {{$error}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endforeach

@endif

@if (session('error'))


<div class="alert alert-danger alert-dismissible" style="padding: 8px; margin:30px;">
    <strong>Error!</strong> {{session('error')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>


@endif

@if (session('success'))
<div class="alert alert-success alert-dismissible" style="padding: 8px; margin:30px;">
    <img src="{{asset('assets/images/arrow.png')}}" alt="">
    <strong>Success!</strong> {{session('success')}}
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>


@endif
