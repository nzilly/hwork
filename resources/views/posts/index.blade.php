@extends('layouts.app')

@section('content')
                  @if (count($posts)>0)
                    @foreach($posts as $post)
                      <div class="card">
                          <div class="card-header"><h3><a href="posts/{{$post->id}}"</a>{{$post->title}}</h3></div>
                      </div>
                       <br>
                    @endforeach
                   @else
                    <div class="card">
                        <div class="card-header"><h3><p>you have no post </p></h3></div>
                    </div>
                  @endif
@endsection
