@extends('themes.ezone.layout')

@section('content')
<div class="section-title-3 mb-15">
	<h3>Hasil Perkembangan Anjing Dewasa</h3>
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
      <th scope="col">Feedback</th>
      @if (Auth::user()!= null && Auth::user()->is_admin==1)
      <th scope="col">Aksi</th>
      @endif
    </tr>
    <tbody>
    @foreach($anjingdes as $anjingde)
    <tr>
    
    <td>{{$anjingde->user_id}}</td>
    @if($anjingde->soal1=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjingde->soal2=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjingde->soal3=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjingde->soal4=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjingde->soal5=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($anjingde->soal6=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($anjingde->feedback == null)
    <td>Saat ini tidak ada feedback.</td>
    @else
    <td>{{$anjingde->feedback}}</td>
    @endif

    @if (Auth::user()!= null && Auth::user()->is_admin==1)
    <td>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$anjingde->id}}">
      Tambah Feedback
    </button>

     <!-- Modal -->
     <div class="modal fade" id="{{$anjingde->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="POST" action="{{url('/anjingde/'.$anjingde->id)}}">
            <div class="card">
              <div class="card-header">Anjing Dewasa (6 Bulan - 18 Bulan)</div>
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
                        <label>Apakah berat badan anjing sudah berkisar pada angka 1 - 2 kg?</label>
                      <div class="form-check">
                        <label class="form-check-label">
                        <input required style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input" {!! ($anjingde->soal1=='true') ? 'checked' : '' !!}/>
                        <a>Yes</a>
                      </div>    
                      <div class="form-check">
                          <label class="form-check-label">
                          <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input" {!! ($anjingde->soal1=='false') ? 'checked' : '' !!}/>
                           <a>No</a>
                      </div> 
                  </div>

                        <div class="form-group">
                            <label>Apakah anjing sudah memiliki pasangan ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input required style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input" {!! ($anjingde->soal2=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input" {!! ($anjingde->soal2=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah anjing sudah mengandung (jika betina) ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input required style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input" {!! ($anjingde->soal3=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input" {!! ($anjingde->soal3=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah anjing sudah melahirkan (jika betina) ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input required style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input" {!! ($anjingde->soal4=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input" {!! ($anjingde->soal4=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah anjing pernah mengalami kerontokan bulu ?</label>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input required style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input" {!! ($anjingde->soal5=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input" {!! ($anjingde->soal5=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                        </div>

                        <div class="form-group">
                            <label>Apakah anjing mengalami penyakit kulit ?</label>
                              <div class="form-check">
                              <label class="form-check-label">
                                <input required style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input" {!! ($anjingde->soal6=='true') ? 'checked' : '' !!}/>
                                <a>Yes</a>
                            </div>    
                            <div class="form-check">
                              <label class="form-check-label">
                                <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input" {!! ($anjingde->soal6=='false') ? 'checked' : '' !!}/>
                                <a>No</a>
                            </div>       
                        </div>       
                      </div>
                      <div class="form-group m-3">
                        <label for="#feedback">Feedback</label>
                        <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10" >{{$anjingde->feedback}}</textarea>
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