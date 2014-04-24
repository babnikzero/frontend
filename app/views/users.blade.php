@extends('layout')

@section('content')
  @foreach ($users as $user)
    <p>{{HTML::linkRoute('goods', $user->username, array($user->id));}}</p>
@endforeach
@stop