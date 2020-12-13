@extends('themes.ezone.layout')

@section('content')

<div>
@if (Auth::user()!=null && Auth::user()->is_premium == 1)
<a href="/diagnosa">
  <div class = "img text-center">
  <img src="{{ asset('themes/ezone/assets/img/animal.png') }}" alt="">
  </div>
</a>
<div class="card-group">
  <div class="card">
    <div class="card-body text-center">
      <h5 class="card-title">Gangguan Pada Kulit Hewan</h5>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#kulit">
        Gangguan Kulit
      </button>

      <!-- Modal -->
      <div class="modal fade" id="kulit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="kulit">Gangguan Pada Kulit Hewan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{url('kulit')}}">
                <div class="card">
                    <div class="card-header">Gangguan Pada Kulit Hewan Peliharaan</div>
                      @if (session('message'))
                      <div class="col-md-12">
                        <div class="alert alert-success">
                          {{session ('message')}}
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="card-body">
                        @csrf
                      <div class="form-group">
                        <label>Apakah hewan peliharaan sering menggaruk kulitnya dibagian tertentu ?</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input required style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input"/>
                            <a>Yes</a>
                        </div>    
                        <div class="form-check">
                          <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input"/>
                            <a>No</a>
                        </div> 
                      </div>
                    
                      <div class="form-group">
                        <label>Apakah pada kulit hewan terdapat bercak/luka?</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input required style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input"/>
                            <a>Yes</a>
                        </div>    
                        <div class="form-check">
                          <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input"/>
                            <a>No</a>
                        </div>  
                      </div>
      
                      <div class="form-group">
                          <label>Apakah pada kulit hewan peliharaan terdapat bercak - bercak merah yang timbul (Seperti bruntusan) ?</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input"/>
                              <a>Yes</a>
                          </div>    
                          <div class="form-check">
                            <label class="form-check-label">
                              <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input"/>
                              <a>No</a>
                          </div> 
                      </div>
      
                      <div class="form-group"> 
                        <label>Apakah kulit hewan peliharaan timbul bau tidak sedap ?</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input"/>
                              <a>Yes</a>
                          </div>    
                          <div class="form-check">
                            <label class="form-check-label">
                              <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input"/>
                              <a>No</a>
                          </div> 
                      </div>
      
                      <div class="form-group">
                          <label>Apakah pada tubuh hewan peliharaan terdapat bengkak di bagian kulit tertentu?</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input"/>
                              <a>Yes</a>
                          </div>    
                          <div class="form-check">
                            <label class="form-check-label">
                              <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input"/>
                              <a>No</a>
                          </div>
                      </div>
      
                      <div class="form-group">
                          <label>Apakah pada tubuh hewan peliharaan timbul nanah di bagian tertentu ?</label>
                            <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input"/>
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
                  </div>
                </form>
              </div>
            </div>
          </div> 
        </div>
        <br/>
        <br/>
        <a href="/diagnosakulit" class="btn btn-info">Hasil dan Feedback</a>
      </div>     
    <div class="card-footer">
      <small class="text-muted">Diagnosa Pet Care</small>
    </div>
  </div>

  <div class="card">
    <div class="card-body text-center">
      <h5 class="card-title">Gangguan Pada Pencernaan Hewan</h5>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pencernaan">
        Gangguan Pencernaan
      </button>

      <!-- Modal -->
      <div class="modal fade" id="pencernaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="pencernaan">Gangguan Pada Pencernaan Hewan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{url('pencernaan')}}">
                <div class="card">
                    <div class="card-header">Gangguan Pencernaan Pada Hewan Peliharaan</div>
                      @if (session('message'))
                      <div class="col-md-12">
                        <div class="alert alert-success">
                          {{session ('message')}}
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="card-body">
                          @csrf
                          <div class="form-group">
                              <label>Apakah hewan peliharaan mengalami pengurangan nafsu makan ?</label>
                              <div class="form-check">
                                  <label class="form-check-label">
                                  <input required style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input"/>
                                  <a>Yes</a>
                              </div>    
                              <div class="form-check">
                                  <label class="form-check-label">
                                  <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input"/>
                                  <a>No</a>
                              </div> 
                          </div>
      
                              <div class="form-group">
                                  <label>Apakah feses pada hewan peliharaan bertekstur cair ?</label>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input required style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input"/>
                                      <a>Yes</a>
                                  </div>    
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input"/>
                                      <a>No</a>
                                  </div>       
                              </div>
      
                              <div class="form-group">
                                  <label>Apakah hewan peliharaan mengalami muntah - muntah selama jangka waktu tertentu ?</label>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input required style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input"/>
                                      <a>Yes</a>
                                  </div>    
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input"/>
                                      <a>No</a>
                                  </div>       
                              </div>
      
                              <div class="form-group">
                                  <label>Apakah perut hewan peliharaan bergerak naik - turun secara terus menerus ?</label>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input required style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input"/>
                                      <a>Yes</a>
                                  </div>    
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input"/>
                                      <a>No</a>
                                  </div>       
                              </div>
      
                              <div class="form-group">
                                  <label>Apakah hewan peliharaan menunjukkan sifat aneh dengan menjulurkan lidah selama waktu tertentu seperti sedang kehausan ?</label>
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input required style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input"/>
                                      <a>Yes</a>
                                  </div>    
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input"/>
                                      <a>No</a>
                                  </div>       
                              </div>
      
                              <div class="form-group">
                                  <label>Apakah hewan peliharaan terlihat lemas dan gemetar ?</label>
                                    <div class="form-check">
                                    <label class="form-check-label">
                                      <input required style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input"/>
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
                  </div>
                </form>
              </div>
            </div>
          </div> 
        </div>

        <br/>
        <br/>
        <a href="/diagnosapencernaan" class="btn btn-info">Hasil dan Feedback</a>
      </div>
    {{-- </div>
  </div>
</div> --}}

    <div class="card-footer">
      <small class="text-muted">Diagnosa Pet Care</small>
    </div>
  </div>

  <div class="card">
    <div class="card-body text-center">
      <h5 class="card-title">Gangguan Pada Pernapasan Hewan</h5>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pernapasan">
        Gangguan Pernapasan
      </button>

      <!-- Modal -->
      <div class="modal fade" id="pernapasan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="pernapasan">Gangguan Pada Pernapasan Hewan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{url('pernafasan')}}">
                <div class="card">
                    <div class="card-header">Gangguan Pernafasan Pada Hewan Peliharaan</div>
                      @if (session('message'))
                      <div class="col-md-12">
                        <div class="alert alert-success">
                          {{session ('message')}}
                        </div>
                      </div>
                    </div>
                    @endif
                    <div class="card-body">
                        @csrf
                      <div class="form-group">
                        <label>Apakah hewan peliharaan mengeluarkan lendir pada bagian hidung ?</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input required style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input"/>
                            <a>Yes</a>
                        </div>    
                        <div class="form-check">
                          <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input"/>
                            <a>No</a>
                        </div> 
                      </div>
                    
                      <div class="form-group">
                        <label>Apakah hewan peliharaan mengalami bersin - bersin ?</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input required style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input"/>
                            <a>Yes</a>
                        </div>    
                        <div class="form-check">
                          <label class="form-check-label">
                            <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input"/>
                            <a>No</a>
                        </div>  
                      </div>
      
                      <div class="form-group">
                          <label>Apakah hewan peliharaan mengalami demam ?</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input"/>
                              <a>Yes</a>
                          </div>    
                          <div class="form-check">
                            <label class="form-check-label">
                              <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input"/>
                              <a>No</a>
                          </div> 
                      </div>
      
                      <div class="form-group"> 
                        <label>Apakah mata dari hewan peliharaan terlihat berair dan terdapat kotoran ?</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input"/>
                              <a>Yes</a>
                          </div>    
                          <div class="form-check">
                            <label class="form-check-label">
                              <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input"/>
                              <a>No</a>
                          </div> 
                      </div>
      
                      <div class="form-group">
                          <label>Apakah pada hewan peliharaan tercium bau mulut dan teradapat sariawan ?</label>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input"/>
                              <a>Yes</a>
                          </div>    
                          <div class="form-check">
                            <label class="form-check-label">
                              <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input"/>
                              <a>No</a>
                          </div>
                      </div>
      
                      <div class="form-group">
                          <label>Apakah hewan peliharaan terlihat sulit bernafas (nafasnya tersengal - sengal ) ?</label>
                            <div class="form-check">
                            <label class="form-check-label">
                              <input required style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input"/>
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
                  </div>
                </form>
              </div>
            </div>
          </div> 
        </div>

        <br/>
        <br/>
        <a href="/diagnosapernapasan" class="btn btn-info">Hasil dan Feedback</a>
      </div>
    
    <div class="card-footer">
      <small class="text-muted">Diagnosa Pet Care</small>
    </div>
  </div>
    </div>
  </div>
  </div>

@else
 
<!-- Button trigger modal -->
<button type="button text-center" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Akun Premium
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Akun Premium</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
      
      </div>
      <div class="modal-body">
      <form method="POST" action="{{url('akunpremium')}}">
      @csrf
        <div class="form-group">
            <label for="voucher">Masukkan Kode Voucher</label>
            <input type="text" class="form-control" id="voucher" aria-describedby="emailHelp" placeholder="" name="voucher">
            <small id="emailHelp" class="form-text text-muted">Pastikan kode voucher yang Anda masukkan benar</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
@endif
</div>
<br/>
@endsection