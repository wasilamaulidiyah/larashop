@extends('themes.ezone.layout')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Fisrt Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach($rekapusers as $rekapuser)
  @if($rekapuser->is_admin == 0)
    <tr>
      <td>{{$rekapuser->id}}</td>
      <td>{{$rekapuser->first_name}}</td>
      <td>{{$rekapuser->last_name}}</td>
      <td>{{$rekapuser->email}}</td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
@endsection