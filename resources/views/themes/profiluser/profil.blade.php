@extends('themes.ezone.layout')

@section('content')
    <div class = 'container'>
        <div>
            <form>
                <div class="form-group row">
                  <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname" value = {{ $user->first_name }} >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastname" value = {{ $user->last_name }}>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="email" value = {{ $user->email }}>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" value = {{ $user->password }}>
                    </div>
                </div>
                <div class='float-right'>
                    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ubah</a>
                </div>
              </form>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
@endsection