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
        <form method="POST" action="{{url('artikel')}}">
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
                    <label for="isi">Konten</label>
                    <textarea class="form-control" name= "konten" id="konten" rows="3" placeholder="Konten">Isi Artikel</textarea>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">
                        Kirim
                        </button>
                    </div>
                </div>
              
            </form>
        </div>
    </div>
</div>
@endif
</div>
@endsection