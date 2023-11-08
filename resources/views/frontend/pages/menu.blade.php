@extends('frontend.layout.app')
@section('class','sub_page')
@section('title','Menu')
@section('content')
<section class="food_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
       <font size ="7">Menu</font>
      </h2>
    </div>

    <ul class="filters_menu">
      <li class="active" data-filter="*">All</li>
      @foreach ( $kategori as $data )
      <li data-filter=".kategori{{$data->id}}">{{$data->nama_kategori}}</li>
      @endforeach
    </ul>
   
    <div class="filters-content">
      <div class="row grid">
        @foreach ($produk as $data)
        <div class="col-sm-6 col-lg-4 all kategori{{$data->id_kategori}}">
          <div class="box">
            
            <div>
              <div class="img-box">
                <img class="rounded-circle" src="{{ Storage::url('public/posts/').$data->gambar }}" class="rounded" style="width:">
              </div>
              
                
              
              <div class="detail-box">
                <h5>
                  {{$data->judul}}
                </h5>
                <p>
                 {{$data->stok}}
                </p>
                <div class="options">
                  <h6>
                    {{$data->harga}}
                  </h6>
                  <a href="{{ route('show_menu',$data->id) }}">
                    <i class="fa fa-eye" style="color:white;"></i>
                  </a>
                </div>
              </div>
             
            </div>
          </div>
          
        </div>
        @endforeach
        </div>
      </div>
   
    </div>
   
   
  </div>
</section>

<!-- end food section -->

@endsection