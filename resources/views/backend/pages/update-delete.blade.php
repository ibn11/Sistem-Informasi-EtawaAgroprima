@extends('backend.layout.app')

@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">

    <h2> apakah anda yakin menghapus {{$produk->judul}} ?</h2>
    <form style="display : inline-block" action="/update-destroy{{$produk->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger"> HAPUS</button>
    </form>
    <a href="/produk" class="btn btn-primary"> BATAL</a>
    </div>
</div>

<thead>

</thead>

<tbody>

</tbody>
@endsection