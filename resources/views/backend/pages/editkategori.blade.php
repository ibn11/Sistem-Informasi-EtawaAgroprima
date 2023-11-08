@extends('backend.layout.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Kategori</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class=" text-white-50"></i> Edit Kategori Produk</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Form Edit Kategoori</h6>
    </div>
    <form action="{{url('/kategori ')}}/{{$kategori->id}}" method="post"  enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" value="{{$kategori->nama_kategori}}" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                      <button type= "submit" value="save" name="submit" class="btn btn-primary" type="button"><i class="fa fa-plus"></i>Ubah Kategori</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                
                
      
            </div>
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