@extends('themes.ezone.layout')

@section('content')
<div class="container">

    <div class="section-title-6 text-center mb-50">
    <h2>Artikel Kucing 'Pet Care'</h2>
</div>
@if (Auth::user()!=null && Auth::user()->is_admin == 1)
<!-- Button trigger modal -->
<div class = "d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah Artikel
      </button>
</div>

<br/>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="all-title-box">
                <div class="container">
                    <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                    </div>
                    </div>
                </div>
            <div class="cart-box-main">
                <div class="container"> 
                <form method="POST" action="{{url('artikelkucing')}}">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                            @csrf
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input class="form-control" name="judul" id="judul" type="text" placeholder="Judul">
                                </div>
                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input class="form-control" name="author" id="author" type="text" placeholder="Nama Penulis">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Konten</label>
                            <textarea class="form-control" name= "konten" id="konten" rows="3" placeholder="Konten"></textarea>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>

    @foreach($artikelkucings as $artikelkucing)
    <div class="card">
        <div class="card-header">
        {{$artikelkucing->judul}} 
        </div>
        <div class="card-body right">
            <form method = 'POST' action="{{route('artikel.update', $artikelkucing->id)}}">
                @csrf
                {{method_field('PUT')}}
                <h5 class="card-title">{{$artikelkucing->author}}</h5>
                <p class="card-text">{{$artikelkucing->konten}}</p>
                <div class='float-right'>
                    <a href="artikelkucing/{{ $artikelkucing->id }}/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ubah</a>
            </form>
        </div>
    </div>
    @endforeach

@elseif(Auth::user()->is_admin != 1)
@foreach($artikelkucings as $artikelkucing)
    <div class="card">
        <div class="card-header">
        {{$artikelkucing->judul}} 
        </div>
        <div class="card-body right">
            <form method = 'POST' action="{{route('artikel.update', $artikelkucing->id)}}">
                @csrf
                {{method_field('PUT')}}
                <h5 class="card-title">{{$artikelkucing->author}}</h5>
                <p class="card-text">{{$artikelkucing->konten}}</p>
            </form>
        </div>
    </div>
    @endforeach
@endif
</div>
<br/>
@endsection