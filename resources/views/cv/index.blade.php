@extends('layouts.app')
@section('content')
<h1 class="text-center">List CV</h1>
<div class="container">
  @if (session()->has('flash_msg'))
      <div class="alert alert-success">
          {{session()->get('flash_msg')}}
      </div>
  @endif

{{-- <table class="table">
    
    <thead>
      <tr>
        <th scope="col">Titre</th>
        <th scope="col">Presentation</th>
        <th scope="col">Created at</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table> --}}
  <div class="float-end">
    <a href="{{url('cvs/create')}}" class="btn btn-primary">New CV</a>
  </div>
  <br><br>
  <div class="row">
  @foreach ($cvs as $cv)
      {{-- <tr>
        <td> <br>  <small class="badge bg-info">{{$cv->user->name}}</small></td>
        <td></td>
        <td>{{$cv->created_at->format('d/m/Y')}}</td>
        <td> --}}



        {{-- </td> --}}
        <div class="col col-3">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('storage/'.$cv->image)}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$cv->titre}}</h5>
                <p class="card-text">{{Str::words($cv->presentation,5,'...')}}</p>
                <form action="{{ url('cvs/'.$cv->id)}}" action="get">
                  {{ csrf_field() }}
                <a href="{{url('cvs/details/'.$cv->id)}}" class="btn btn-primary">Details</a>&nbsp;&nbsp;
                <a href="{{ url('cvs/'.$cv->id).'/edit'}}" class="btn btn-outline-primary">Edit</a>&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Delete</button>&nbsp;&nbsp;
              </form>
              </div>
            </div>

      </div>


      @endforeach
  </div>
</div>

@endsection
