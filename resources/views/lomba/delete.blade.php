@extends('layouts.app');

@section('content')
<div class="jumbotron">
  <h3 class="display-4">Apakah anda yakin menghapus data "{{$lomba->name}}"?</h3>  
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/lomba/{{$lomba->id}}/confirmDelete" role="button">Ya</a>
    <a class="btn btn-danger btn-lg" href="/lomba" role="button">Tidak</a>
  </p>
</div>
@endsection