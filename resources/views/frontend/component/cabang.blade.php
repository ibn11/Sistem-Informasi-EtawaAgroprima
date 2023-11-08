@extends('frontend.layout.app')
@section('class','sub_page')
@section('content')
<br>
<br>
<div class="container tect-center">
<div class="row">
@foreach ($cabang as $data )
<div class="col-xl-3 col-md-12 mb-6" style="padding-top: 20px">
  <div class="card-dropdown border-left-primary shadow h-100 py-2 text-center">
      <div class="card-body">
          <div class="row no-gutters align-items-center">
              <div class="col mr-4">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-4">
                      {{$data->nama_cabang}}</div>
                  <div class="h5 mb-4 font-weight-bold text-gray-800">{!!$data->desk!!}</div>
              </div>
          </div>
      </div>
  </div>
</div>
@endforeach
</div>
</div>
<br>
<br>


@endsection