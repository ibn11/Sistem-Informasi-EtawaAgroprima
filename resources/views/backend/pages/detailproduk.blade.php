@extends('backend.layout.app')
@section('content')

<table>
    <thead>
        <div>
        <tr>
            <label for=""> Nama Produk</label>
            <input class="form-control" type="text" value="{{$produk->judul}}" aria-label="Disabled input example" disabled readonly> 
            <br>
            <label for=""> Kategori Produk</label>
            <input class="form-control" type="text" value="{{$produk->kategoris->nama_kategori}}" aria-label="Disabled input example" disabled readonly> 
            <br>
            <label for=""> Harga Produk</label>
            <input class="form-control" type="text" value="{{$produk->harga}}" aria-label="Disabled input example" disabled readonly> 
            <br>
            <label for=""> Stok Produk</label>
            <input class="form-control" type="text" value="{{$produk->stok}}" aria-label="Disabled input example" disabled readonly>
            <br>
            <label for=""> Deskripsi Produk</label>
            <textarea class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>{!! $produk->desk !!}</textarea> 
            <br>
            <img src="{{ Storage::url('public/posts/') .$produk->gambar }}" class="img-main" height="300px" disabled readonly> 
        </tr>
    </thead>

<tbody>


 



</tbody>
<br>
<br>
 
</table>


</div>

@endsection