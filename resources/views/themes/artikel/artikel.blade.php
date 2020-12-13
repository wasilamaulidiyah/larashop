@extends('themes.ezone.layout')

@section('content')
<div>

@if (Auth::user()!=null && Auth::user()->is_admin == 1)
<div class="all-title-box">
        <div class="container">
            <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tambah Artikel</h3>
                </div>
            </div>
            </div>
        </div>
    
    <div class="cart-box-main">
        <div class="container"> 
        @if($is_kucing)
        <form method="POST" action="{{url('/artikelkucing/'.$artikel->id)}}">
        @else
        <form method="POST" action="{{url('/artikelanjing/'.$artikel->id)}}">
        @endif
                <div class="row">
                    <div class="col-md-6 mb-3">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" name="judul" id="judul" type="text" value="{{ $artikel->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input class="form-control" name="author" id="author" type="text" value="{{ $artikel->author }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isi">Isi Konten</label>
                    <textarea class="form-control" name= "konten" id="konten" rows="3" >{{ $artikel->konten }}</textarea>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button href="/" type="submit" class="btn btn-primary" >
                        Simpan
                        </button>
                    </div>
                </div>
              
            </form>
        </div>
    </div>
</div>
@else
<div class="section-title-6 text-center mb-50">
				<h2>Artikel Pet Care</h2>
			</div>
			@foreach($artikels as $artikel)
			
			<div class="card">
				<div class="card-header">
				 {{$artikel->judul}} 
				</div>
				<div class="card-body">
					<h5 class="card-title">{{$artikel->author}}</h5>
					<p class="card-text">{{$artikel->konten}}</p>
				</div>
			</div>
			@endforeach
@endif
</div>
@endsection