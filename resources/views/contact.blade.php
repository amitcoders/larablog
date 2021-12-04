@extends('layouts.app')
@section('content')
    <h1>Contact Page</h1>
    @foreach($people as $log)
    <li>{{$log}}</li>
    @endforeach
@endsection