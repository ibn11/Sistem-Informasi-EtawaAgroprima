@extends('frontend/layout.app')
@section('title',' Latihan')

@section('slide')
@include('frontend.component.slide')
@endsection

@section('content')


  <!-- food section -->

  @include('frontend/component.produk')

  <!-- end food section -->

  <!-- about section -->
 <!--   about section -->
<section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        @foreach ($profil as $data)
          
        
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('asset/frontend/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <font size = "6">Profil Kami</font>
              </h2>
            </div>
            <p>
              <font size = "5">{{$data->desk}}</font>
            </p>
            <a href="/profil">
              Read More
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        @foreach ($kontak as $data)
          
        
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('asset/frontend/images/kontak.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <font size = "6">Kontak Kami</font>
              </h2>
            </div>
            <p>
              <font size = "5">{{$data->desk}}</font>
            </p>
            <a href="/kontak">
              Read More
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  
  <!-- end book section -->

  <!-- client section -->


  <div class="jumbotron text-center">
    <h1 class="display-4">Cabang Etawa Agroprima</h1>
    <p class="lead"></p>
    <hr class="my-4">
    <p></p>
    <a class="btn btn-primary btn-lg" href="/cabangfrontend" role="button">Lihat Cabang</a>
  </div>


@endsection