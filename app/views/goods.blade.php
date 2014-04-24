@extends('layout')

@section('content')
<p>User {{$user->username}}
<table>

  <tr>
    <td>goods id</td>
    <td>Count</td>
  </tr>
	
  @foreach ($goods as $good)
  
    <tr>
    <th>{{$good->goods_id}}</th>
    <th>{{$good->count}}</th>
    </tr>
@endforeach
</table>
@stop