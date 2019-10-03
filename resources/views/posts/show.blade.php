@extends('layouts.app')

@section('content')
      <div class="card">
          <div class="card-header"><h1>{{$post->title}}</h1>
             <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
          </div>
          <div class="card-body">
            <div>
              {{$post->content}}
            </div>
         </div>
    </div>
  @endsection
