@extends('layouts.app')

@section('css')

@endsection

@section('tambahdata')
<a href="/lomba/add">
    <button class="btn btn-success">Tambah Data</button>
</a>
@endsection

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://wowslider.com/sliders/demo-10/data/images/forest.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://wowslider.com/sliders/demo-10/data/images/forest.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://wowslider.com/sliders/demo-10/data/images/forest.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@section('content')
<br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Poster</th>
      <th scope="col">Deadline</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $lombas = \App\Lomba::get();
        $no = 1;
    ?>
        @for($i = 0; $i<sizeof($lombas); $i++)
        <tr>
                <th scope="row">{{$no}}</th>
                <td>
                    <a href="/lomba/{{$lombas[$i]->id}}">
                        {{$lombas[$i]->name}}
                    </a>
                </td>
                <td>{{$lombas[$i]->deskripsi}}</td>
                <td>
                    <img height="100" src="{{$lombas[$i]->poster}}" />
                </td>
                <td>{{$lombas[$i]->tanggal_tutup}}</td>
                <td>
                    <a href="/lomba/{{$lombas[$i]->id}}/edit">
                        <button type="button" class="btn btn-primary">Edit</button>
                    </a>   
                    <a href="/lomba/{{$lombas[$i]->id}}/delete">
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </a>        
                </td>
            </tr>
        <?php
        $no++    
        ?>
        @endfor
  </tbody>
</table>

@endsection

@section('js')

@endsection