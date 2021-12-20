@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('cvs')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Titre</label>
                        <input type="text" name="titre" class="form-control" id="titre">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Présentation</label>
                            <textarea name="presentation" class="form-control" id="presentation"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Image</label>
                        <input name="image" type="file" class="form-control" id="image"/>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <input class="btn btn-primary" type="submit" value="Enregistrer">
            </div>
        </form>
        
    </div>
@endsection