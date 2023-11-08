@extends('backend.layout.app')
@section('content')

<table>
    <thead>
        <div>
        <tr>
            <label for=""> Nama Cabang</label>
            <input class="form-control" type="text" value="{{$cabang->nama_cabang}}" aria-label="Disabled input example" disabled readonly> 
            <label for=""> Deskripsi Cabang</label>
            <textarea class="form-control" type="text" value="" aria-label="Disabled input example" disabled readonly>{!! $cabang->desk !!}</textarea> 
        </tr>
    </thead>

<tbody>
</tbody>
<br>
<br>
 
</table>


</div>

@endsection