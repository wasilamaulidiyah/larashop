@extends('themes.ezone.layout')

@section('content')
@if (Auth::user()!= null && Auth::user()->is_admin==1)
<div>
@foreach($kucings as $kucing)
{{$kucing->soal1}}
@endforeach
</div>
@else
<ul class="nav nav-pills mb-3 navbar center" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Kitten (Anak Kucing) </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Kucing Remaja</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Kucing Dewasa</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="POST" action="{{url('kucing')}}">
            <div class="card">
              <div class="card-header">Kitten (1-4 Minggu)</div>
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
                  <label>Apakah kucing sudah memasuki usia 4 minggu setelah kelahiran?</label>
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
              
                <div class="form-group">
                  <label>Apakah berat badan kucing ketika lahir sudah setara dengan 100 gram?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input"/>
                      <a>Yes</a>
                  </div>    
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input"/>
                      <a>No</a>
                  </div>  
                </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa membuka mata ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input"/>
                                <a>No</a>
                            </div> 
                        </div>

                        <div class="form-group"> 
                          <label>Apakah kucing sudah bisa berjalan/menggerakkan anggota tubuhnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input"/>
                                <a>No</a>
                            </div> 
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa menyusu pada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input"/>
                                <a>No</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing mengalami pertambahan berat badan sejak awal kelahiran
                              (Umumnya berat badan kucing setelah lahir sekitar 100 gram)?</label>
                              <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input"/>
                                <a>No</a>
                            </div>   
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa menunjukkan respon pengelihatan dan perilaku ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal7" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal7" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                          
                        </div>

                        <div class="form-group">
                          
                            <label>Apakah kucing sudah bisa menunjukkan respon pendengaran dan interaksi dengan saudara kandungnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal8" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal8" class="form-check-input"/>
                                <a>No</a>
                            </div>  
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah terbiasa menyusu kepada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal9" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal9" class="form-check-input"/>
                                <a>No</a>
                            </div> 
                        </div>
                      </div>
                    
                      <div class = "card-footer text-right">
                        <div class="form-group row mb-0">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                              Kirim
                            </button>
                          </div>
                        </div>
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="POST" action="{{url('kucingre')}}">
            <div class="card">
              <div class="card-header">Kucing Remaja (4-8 Minggu)</div>
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
                        <label>Apakah kucing sudah memasuki usia diatas 8 minggu ?</label>
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

                        <div class="form-group">
                            <label>Apakah kucing sudah memiliki kurang lebih 30 gigi dewasa pada mulutnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah berat badan kucing sudah naik 100% dari berat saat kelahiran ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa beradaptasi dengan lingkungan sekitar?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah terbiasa berkeliling di lingkungan sekitar ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing terbiasa mencari makan secara mandiri?</label>
                              <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input"/>
                                <a>Yes</a>
                              </div>    
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input"/>
                                  <a>No</a>
                              </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa kembali ke kandangnya pada waktu tertentu ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal7" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal7" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>
                      </div>  
                    
                    <div class = "card-footer text-right">
                      <div class="form-group row mb-0">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                  Kirim
                              </button>
                          </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="POST" action="{{url('kucingde')}}">
            <div class="card">
              <div class="card-header">Kucing Dewasa (8-12 Minggu)</div>
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
                      <label>Apakah berat badan kucing sudah berkisar pada angka 1 - 2 kg?</label>
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

                        <div class="form-group">
                            <label>Apakah kucing sudah memiliki pasangan ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah mengandung (jika betina) ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah melahirkan (jika betina) ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing pernah mengalami kerontokan bulu ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing mengalami penyakit kulit ?</label>
                              <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input"/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input"/>
                                <a>No</a>
                            </div>       
                        </div>
                    
                    <div class = "card-footer text-right">
                      <div class="form-group row mb-0">
                          <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">
                                  Kirim
                              </button>
                          </div>
                      </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div><br>
@endif
@endsection