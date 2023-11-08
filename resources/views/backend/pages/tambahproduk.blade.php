@extends('backend/layout.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class=" text-white-50"></i>Tambah Produk</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Form Tambah Produk</h6>
    </div>
    <div class="card-body">
    <div class="form-group">
        <form action="/produk" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for=""> Nama Produk</label>
        <input type="text" name ="judul" class="form-control" placeholder=" Masukkan Nama Produk" required>
        <br>
        <label for=""> Harga Produk</label>
        <input type="text" name ="harga" class="form-control" placeholder=" Masukkan Harga Produk" required>
        <br>
        <label for=""> Stok Produk</label>
        <input type="text" name ="stok" class="form-control" placeholder=" Masukkan Stok Produk" required>
        <br>
        <label for=""> Kategori Produk</label><br>
        <select class="form-control" name="id_kategori" aria-label="Default select example">
            <option selected>Kategori</option>
            @foreach ($kategori as $data )
            <option value="{{ $data->id }}">{{$data->nama_kategori}}</option>
             @endforeach
          </select>
          <br>
          <label for=""> Gambar Produk</label>
        <input class="form-control" type="file" string ="filename" name="gambar" placeholder=" Masukkan Gambar Produk" required>
        <br>
        <textarea name="desk" id="summernote" cols="30" rows="10"></textarea>
        <br>
        <button type= "submit" value="save" name="submit "class="btn btn-primary">Simpan</button>
        <a href="/produk" class="btn btn-danger">Batal</a>
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