@extends('frontend.layout.app')
@section('class','sub_page')
@section('content')
<br>
<br>
<br>
<main class="item">
    
    <section class="img">
     
      <img src="{{ Storage::url('public/posts/') .$produk->gambar }}" class="img-main">
      
      </div>
    </section>
    <section class="price">
      <h2 class="price-sub__heading">{{$produk->kategoris->nama_kategori}}</h2>
      <h1 class="price-main__heading">{{$produk->judul}}</h1>
      <h3 class="price-txt">{!! $produk->desk !!}</h3>
      <div class="price-box">
        <div class="price-box__main">
          <span class="price-box__main-discount">Rp {{$produk->harga}}</span>
          <br>
          <span class="price-box__main-discount">Stok:{{$produk->stok}}</span>
        </div>
      </div>

      <div class="price-btnbox">

        
        <button class="price-cart__btn btn--orange">
          <a href="{{$kontak->whatsapp}}">Beli Sekarang</a>
        </button>


      </div> 
    </section>
  </main>  
  <br>
  <br>

@endsection