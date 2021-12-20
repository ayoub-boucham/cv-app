@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center">{{$cvs->titre}}</h1>
    <img src="{{asset('storage/'.$cvs->image)}}" class="img-fluid mx-auto d-block" alt="Image">
    <br> <br>
    <p class="text-center">
        {{$cvs->presentation}}
    </p>
</div>
@endsection
