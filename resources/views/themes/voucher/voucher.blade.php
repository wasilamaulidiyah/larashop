@extends('themes.ezone.layout')

@section('content')
@if (Auth::user()!= null && Auth::user()->is_admin==1)
<div class='container'>
    <div class="d-flex justify-content-center">
        <form class = 'form-inline' method="POST" action="{{url('voucher')}}">
        @csrf
            <div class="form-group">
                <label class="mr-2" for="exampleInputEmail1">Banyak Voucher</label>
                <input type="number" name="voucher" class="form-control mr-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah voucher">
            </div>
            
            <button type="submit" class="btn btn-primary rounded">Submit</button>
        </form>
    </div>
    <div class="text-center">
    @if($voucher != null)
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Voucher</th>
            <th scope="col">Expired</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voucher as $vcr)
            <tr>
            <th scope="row">{{$vcr->voucher}}</th>
            <td>{{$vcr->is_required}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    </div>

</div>
@endif
@endsection