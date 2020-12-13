@extends('themes.ezone.layout')

@section('content')
<div>
<div class="section-title-3 mb-15">
	<h2>Hasil Perkembangan Kucing dan Feedback</h2>
</div>
<table class="table table-striped">
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Soal 1</th>
      <th scope="col">Soal 2</th>
      <th scope="col">Soal 3</th>
      <th scope="col">Soal 4</th>
      <th scope="col">Soal 5</th>
      <th scope="col">Soal 6</th>
      <th scope="col">Soal 7</th>
      <th scope="col">Soal 8</th>
      <th scope="col">Soal 9</th>
      <th scope="col">Feedback</th>
      @if (Auth::user()!= null && Auth::user()->is_admin==1)
      <th scope="col">Aksi</th>
      @endif
    </tr>
    <tbody>
    @foreach($kucings as $kucing)
    <tr>
    
    <td>{{$kucing->user_id}}</td>
    @if($kucing->soal1=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kucing->soal2=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kucing->soal3=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kucing->soal4=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kucing->soal5=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kucing->soal6=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kucing->soal7=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kucing->soal8=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kucing->soal9=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kucing->feedback == null)
    <td>Saat ini tidak ada feedback.</td>
    @else
    <td>{{$kucing->feedback}}</td>
    @endif

    @if (Auth::user()!= null && Auth::user()->is_admin==1)
    <td>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$kucing->id}}">
      Tambah Feedback
    </button>

<!-- Modal -->
    <div class="modal fade" id="{{$kucing->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="POST" action="{{url('/kucing/'.$kucing->id)}}">
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
                  @method('PUT')
                <div class="form-group">
                  <label>Apakah kucing sudah memasuki usia 4 minggu setelah kelahiran?</label>
                  
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="true" id = 'option1' name="soal1" class="form-check-input" {!! ($kucing->soal1=='true') ? 'checked' : '' !!}/>
                      <a>Yes</a>
                  </div>    
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="false" id = 'option2' name="soal1" class="form-check-input" {!! ($kucing->soal1=='false') ? 'checked' : '' !!}/>
                      <a>No</a>
                  </div> 
                </div>
              
                <div class="form-group">
                  <label>Apakah berat badan kucing ketika lahir sudah setara dengan 100 gram?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input" {!! ($kucing->soal2=='true') ? 'checked' : '' !!}/>
                      <a>Yes</a>
                  </div>    
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input" {!! ($kucing->soal2=='false') ? 'checked' : '' !!}/>
                      <a>No</a>
                  </div>  
                </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa membuka mata ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input" {!! ($kucing->soal3=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input" {!! ($kucing->soal3=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div> 
                        </div>

                        <div class="form-group"> 
                          <label>Apakah kucing sudah bisa berjalan/menggerakkan anggota tubuhnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input" {!! ($kucing->soal4=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input" {!! ($kucing->soal4=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div> 
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa menyusu pada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input" {!! ($kucing->soal5=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input" {!! ($kucing->soal5=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing mengalami pertambahan berat badan sejak awal kelahiran
                              (Umumnya berat badan kucing setelah lahir sekitar 100 gram)?</label>
                              <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input" {!! ($kucing->soal6=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input" {!! ($kucing->soal6=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>   
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah bisa menunjukkan respon pengelihatan dan perilaku ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal7" class="form-check-input" {!! ($kucing->soal7=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal7" class="form-check-input" {!! ($kucing->soal7=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                          
                        </div>

                        <div class="form-group">
                          
                            <label>Apakah kucing sudah bisa menunjukkan respon pendengaran dan interaksi dengan saudara kandungnya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal8" class="form-check-input" {!! ($kucing->soal8=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal8" class="form-check-input" {!! ($kucing->soal8=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>  
                        </div>

                        <div class="form-group">
                            <label>Apakah kucing sudah terbiasa menyusu kepada induknya ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="true" name="soal9" class="form-check-input" {!! ($kucing->soal9=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal9" class="form-check-input" {!! ($kucing->soal9=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div> 
                        </div>
                      </div>

                      <div class="form-group m-3">
                        <label for="#feedback">Feedback</label>
                        <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10" >{{$kucing->feedback}}</textarea>
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
    @endif
</div>
</form>
    </td>
    @endforeach
    </tr>
    </tbody>
</table>
</div>  
@endsection