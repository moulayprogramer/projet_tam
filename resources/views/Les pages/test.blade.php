@extends('layouts.app');

@section('content')

<h1>email</h1>
<div class="alert alert-success" role="alert">{{$email}}</div>

<h1>password</h1>
<div class="alert alert-success" role="alert">{{$password}}</div>
<h1>remember</h1>
<div class="alert alert-success" role="alert">{{$remember}}</div>

@endsection