@extends('backend/layout.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Produk</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class=" text-white-50"></i> Edit Produk</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Form Edit Produk</h6>
    </div>
    <div class="card-body">
    <div class="form-group">

      
      
        <form action="{{url('/produk')}}/{{$produk->id}}" method="post"  enctype="multipart/form-data">
        {{-- @foreach ($produk as $data ) --}}
            
        @csrf 
        <label for=""> Nama Produk</label>
        <input type="text" value="{{$produk->judul}}" name ="judul" class="form-control" placeholder=" Masukkan Nama Produk"> 
        <br>
        <label for=""> Harga Produk</label>
        <input type="text" value="{{$produk->harga}}" name ="harga" class="form-control" placeholder=" Masukkan Harga Produk">
        <br>
        <label for=""> Stok Produk</label>
        <input type="text" value="{{$produk->stok}}" name ="stok" class="form-control" placeholder=" Masukkan Stok Produk">
        <br>
        <label for=""> Kategori Produk</label><br>
        <select class="form-control"  name="id_kategori" aria-label="Default select example">
            <option value="{{$produk->id_kategori}}">{{$produk->kategoris->nama_kategori}}</option>
            @foreach ($kategori as $data )
            <option value="{{ $data->id }}">{{$data->nama_kategori}}</option>
            @endforeach
          </select>
          <br>
          <label for=""> Gambar Produk</label>
        <input class="form-control" value="{{$produk->gambar}}" type="file" string ="filename" name="gambar" placeholder=" Masukkan Gambar Produk">
        <br>
        <textarea name="desk" id="summernote" cols="30" rows="10"  value="{{$produk->desk}}">{{$produk->desk}}</textarea>
        <button type= "submit" value="save" name="submit "class="btn btn-primary">Simpan</button>
        <a href="/produk" class="btn btn-danger">Batal</a>
        {{-- @endforeach --}}
        </form>

       
    </div>
    </div>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        
            

    </div>
</div>

</div>


@endsection