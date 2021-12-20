@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{url('cvs/'.$cvs->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" class="form-control" id="titre" value="{{$cvs->titre}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Présentation</label>
                    <textarea name="presentation" class="form-control" id="presentation">{{$cvs->presentation}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <img src="{{asset('storage/'.$cvs->image)}}" width="150px" class="rounded float-start m-2" alt="Image">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <input class="btn btn-primary" type="submit" value="Enregistrer">
        </div>
    </form>
    
</div>
@endsection