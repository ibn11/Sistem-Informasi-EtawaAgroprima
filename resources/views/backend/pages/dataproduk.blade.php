@extends('backend.layout.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if ($message = Session::get('status'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <table class="table table-bordered responsive text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Kategori Produk</th>
                        <th>Harga Produk</th>
                        <th>Stok Produk</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- adalah looping data, $data adalah fariabel didalam ProdukController dengan funcion indek -->
                    @forelse ($produk as $data)
                    
              
                    <tr>
                        
                        <td>{{$data->judul}}</td>
                        <td>{{$data->kategoris->nama_kategori}}</td>
                        <td>{{$data->harga}}</td>
                        <td>{{$data->stok}}</td>
                        <td class="text-center">
                            <img src="{{ Storage::url('public/posts/').$data->gambar }}" class="rounded" style="width: 50px">
                        </td>
                        <td class="text-center">
                            
                                <a href="edit/{{$data->id}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <form style="display : inline-block" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data Ini?')" action="{{route('produk.destroy', $data->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                                <a href="{{ route('detailproduk',$data->id) }}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr> 
                    @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                @endforelse
                   
                </tbody>
            </table>
            {{ $produk->links() }}
        </div>
    </div>
</div>
</div>
@endsection