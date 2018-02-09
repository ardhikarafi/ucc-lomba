@extends('layouts.app')

@section('css')

@endsection

@section('content')
<br><br>
<div class="container">
<form action="/lomba/{{$lomba->id}}/edit" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama"class="form-control" id="nama"  placeholder="Enter nama" value="{{$lomba->name}}" required>    
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi"class="form-control" id="deskripsi"  placeholder="Enter Deskripsi" value="{{$lomba->deskripsi}}" required>    
    </div>
    <div class="form-group">
        <label for="poster">Poster</label>
        <input type="text" name="poster"class="form-control" id="poster"  placeholder="Enter Poster" value="{{$lomba->poster}}" required>    
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal Penutupan Lomba</label>
        <input type="date" name="tanggal"class="form-control" id="tanggal"  placeholder="Tanggal" value="{{$lomba->tanggal_tutup}}" required>    
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn-warning" href="/lomba" role="button">Kembali</a>    
</form>
</div>
<br>
<div class="alert alert-primary container" role="alert">
  Isikan data lomba dengan teliti
</div>
@endsection

@section('js')

@endsection