@extends('themes.ezone.layout')

@section('content')
@if (Auth::user()!=null && Auth::user()->is_premium == 1)
<div class="section-title-3 mb-15">
	<h3>Hasil Diagnosa Kulit</h3>
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
    @foreach($kulits as $kulit)
    <tr>

    <td>{{$kulit->user_id}}</td>
    @if($kulit->soal1=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kulit->soal2=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kulit->soal3=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kulit->soal4=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif
    
    @if($kulit->soal5=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kulit->soal6=='true')
    <td>Yes</td>
    @else
    <td>No</td>
    @endif

    @if($kulit->feedback == null)
    <td>Saat ini tidak ada feedback.</td>
    @else
    <td>{{$kulit->feedback}}</td>
    @endif

    @if (Auth::user()!= null && Auth::user()->is_admin==1)
    <td>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$kulit->id}}">
      Tambah Feedback
    </button>

<!-- Modal -->
    <div class="modal fade" id="{{$kulit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Feedback</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="POST" action="{{url('/kulit/'.$kulit->id)}}">
            <div class="card">
              <div class="card-header">Gangguan Pada Kulit Hewan Peliharaan</div>
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
                  <label>Apakah hewan peliharaan sering menggaruk kulitnya dibagian tertentu ?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="true" name="soal1" class="form-check-input" {!! ($kulit->soal1=='true') ? 'checked' : '' !!}/>
                      <a>Yes</a>
                  </div>    
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="false" name="soal1" class="form-check-input" {!! ($kulit->soal1=='false') ? 'checked' : '' !!}/>
                      <a>No</a>
                  </div> 
                </div>
              
                <div class="form-group">
                  <label>Apakah pada kulit hewan terdapat bercak/luka?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="true" name="soal2" class="form-check-input" {!! ($kulit->soal2=='true') ? 'checked' : '' !!}/>
                      <a>Yes</a>
                  </div>    
                  <div class="form-check">
                    <label class="form-check-label">
                      <input style="width:10px; height:10px" type="radio" value="false" name="soal2" class="form-check-input" {!! ($kulit->soal2=='false') ? 'checked' : '' !!}/>
                      <a>No</a>
                  </div>  
                </div>

                <div class="form-group">
                    <label>Apakah pada kulit hewan peliharaan terdapat bercak - bercak merah yang timbul (Seperti bruntusan) ?</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="true" name="soal3" class="form-check-input" {!! ($kulit->soal3=='true') ? 'checked' : '' !!}/>
                        <a>Yes</a>
                    </div>    
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="false" name="soal3" class="form-check-input" {!! ($kulit->soal3=='false') ? 'checked' : '' !!}/>
                        <a>No</a>
                    </div> 
                </div>

                <div class="form-group"> 
                  <label>Apakah kulit hewan peliharaan timbul bau tidak sedap ?</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="true" name="soal4" class="form-check-input" {!! ($kulit->soal4=='true') ? 'checked' : '' !!}/>
                        <a>Yes</a>
                    </div>    
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="false" name="soal4" class="form-check-input" {!! ($kulit->soal4=='false') ? 'checked' : '' !!}/>
                        <a>No</a>
                    </div> 
                </div>

                <div class="form-group">
                    <label>Apakah pada tubuh hewan peliharaan terdapat bengkak di bagian kulit tertentu?</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="true" name="soal5" class="form-check-input" {!! ($kulit->soal5=='true') ? 'checked' : '' !!}/>
                        <a>Yes</a>
                    </div>    
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="false" name="soal5" class="form-check-input" {!! ($kulit->soal5=='false') ? 'checked' : '' !!}/>
                        <a>No</a>
                    </div>
                </div>

                <div class="form-group">
                    <label>Apakah pada tubuh hewan peliharaan timbul nanah di bagian tertentu ?</label>
                      <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="true" name="soal6" class="form-check-input" {!! ($kulit->soal6=='true') ? 'checked' : '' !!}/>
                        <a>Yes</a>
                    </div>    
                    <div class="form-check">
                      <label class="form-check-label">
                        <input style="width:10px; height:10px" type="radio" value="false" name="soal6" class="form-check-input" {!! ($kulit->soal6=='false') ? 'checked' : '' !!}/>
                        <a>No</a>
                    </div>   
                </div>
                <div class="form-group m-3">
                  <label for="#feedback">Feedback</label>
                  <textarea class="form-control" name="feedback" id="feedback" cols="30" rows="10" >{{$kulit->feedback}}</textarea>
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
    @endif
</div>
</form>
    </td>
    @endforeach
    </tr>
    </tbody>
</table>
@endif
@endsection