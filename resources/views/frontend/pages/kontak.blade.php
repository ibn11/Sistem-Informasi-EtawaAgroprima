
@extends('frontend.layout.app')
@section('class','sub_page')
@section('title','Kontak')
@section('content')
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
@foreach ( $kontak as $data )
  
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('asset/frontend/images/kontak.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <font size ="6">Kontak Kami Etawa Agroprima</font>
              </h2>
            </div>
            <p>
           <font size = "5">{{$data->desk}}</font>
            </p>
            <div class="footer_social">
              <a href="{{$data->facebook}}">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="{{$data->instagram}}">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="{{$data->whatsapp}}">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <p>
                {!! $data->maps !!}
              </p>
            </div>
          </div>
        </div>
      </div>
      
@endforeach
    </div>
  </section>

  <!-- end about section -->

  <!-- footer section -->
 
  <!-- footer section -->

  <!-- jQery -->
  @include('frontend/component.js')
  <!-- End Google Map -->
@endsection