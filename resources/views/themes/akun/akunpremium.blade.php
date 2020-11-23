@extends('themes.ezone.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="POST" action="{{url('anjing')}}">
            <div class="card">
              <div class="card-header">Akun Premium</div>
              @if (session('message'))
              <div class="col-md-12">
                <div class="alert alert-success">
                  {{session ('message')}}
                </div>
              </div>
              
              @endif
              <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label></label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input"/>
                            <a>Yes</a>
                        </div>    
                        <div class="form-check">
                            <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input"/>
                            <a>No</a>
                        </div> 
                    </div>
@endsection