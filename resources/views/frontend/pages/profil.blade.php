
@extends('frontend.layout.app')
@section('class','sub_page')
@section('title','Profil')
@section('content')
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
@foreach ( $profil as $data )
  

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('asset/frontend/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
               <font size = "6">Profil Kami Etawa Agroprima</font>
              </h2>
            </div>
            <font size ="5">
           {{$data->desk}}
            </font>
            <br>
              <a href="{{$data->facebook}}">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="{{$data->instagram}}">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="{{$data->whatsapp}}">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
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