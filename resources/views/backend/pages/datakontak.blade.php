@extends('backend/layout.app')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kontak</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class=" text-white-50"></i> Data Kontak</a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Form Data Kontak</h6> 
    </div>
    <div class="card-body">
    <div class="form-group">
        @if ($message = Session::get('status'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
            @endif
        @foreach ($kontak as $data )
        <form onsubmit="return confirm('Apakah Anda Yakin Merubah Data Ini?')" action="{{ route('datakontak.update',$data->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <label for=""> Facebook</label>
        <input type="text" value="{{$data->facebook}}" name ="facebook" class="form-control" placeholder=" Masukkan Link Facebook" required>
        <br>
        <label for=""> Instagram</label>
        <input type="text" value="{{$data->instagram}}" name ="instagram" class="form-control" placeholder=" Masukkan Link Instagram" required>
        <br>
        <label for=""> Whatsapp</label>
        <input type="text" value="{{$data->whatsapp}}" name ="whatsapp" class="form-control" placeholder=" Masukkan Link Whatsapp" required>
        <br>
        <label for=""> Maps</label>
        <textarea name="maps" class="form-control" cols="30" rows="10">{{$data->maps}}</textarea><br>
        <br>
        <textarea name="desk" id="summernote" cols="30" rows="10" value="{{$data->desk}}">{{$data->desk}}</textarea>
        <br>
        <button type= "submit" value="save" name="submit "class="btn btn-primary">Simpan</button>
        <a href="/admin" class="btn btn-danger">Batal</a>
        @endforeach
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