@extends('layouts.app')

@section('content')
                    <div class="container">
                        <div class="jumbotron">
                        <h1 class="display-4">Welcome to  bloggin</h1>
                          <p class="lead">The blog shows written as indexlab homework.</p>
                          <hr class="my-4">
                          <p>join readings of various post of blog.</p>
                          <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ url('/posts') }}" role="button">join </a>
                      </p>
                    </div>
            </div>
@endsection
