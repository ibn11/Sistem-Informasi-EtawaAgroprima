@extends('backend/layout.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Cabang</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class=" text-white-50"></i>Tambah Cabang</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Form Tambah Produk</h6>
    </div>
    <div class="card-body">
    <div class="form-group">
        <form action="/cabang" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for=""> Nama Cabang</label>
        <input type="text" name ="nama_cabang" class="form-control" placeholder=" Masukkan Nama Cabang" required>
        <br>
        <textarea name="desk" id="summernote" cols="30" rows="10"></textarea>
        <br>
        <button type= "submit" value="save" name="submit "class="btn btn-primary">Simpan</button>
        <a href="/admin" class="btn btn-danger">Batal</a>
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