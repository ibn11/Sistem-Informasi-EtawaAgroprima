@extends('backend.layout.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class=" text-white-50"></i> Kategori Produk</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Form Tambah Kategori</h6>
    </div>
    @if ($message = Session::get('status'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
				@endif
    <form action="/kategori" method="POST"  enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                    <div class="input-group-append">
                      <button type= "submit" value="save" name="submit" class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Kategori</button>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </form>
    <div class="row">
        <div class="col-md-12">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Tabel Data Kategori</h6>
            </div>
            <div class="card-body">
                
                    <div class="table">
                        <table class="table table-bordered text-center" id="dataTable" width="80%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $data)
                                <tr>
                                    <td>{{$data->nama_kategori}}</td>
                                    <td>
                                        <a href="editkategori/{{$data->id}}" class="btn btn-success"> <i class="fa fa-edit"></i></a>
                                        <form style="display : inline-block" onsubmit="return confirm('Apakah Anda Yakin Menghapus Kategori Ini?')" action="{{route('kategori.destroy', $data->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                         @method('DELETE')
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    </td>
                                </tr> 
                                @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $kategori->links() }}
                    </div>
      
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