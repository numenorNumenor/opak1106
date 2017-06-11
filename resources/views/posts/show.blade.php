@extends('master')

@section('title', $post->title)

@section('content')
<div class="row">
  <div class="col-md-12">
    <a class="btn btn-success" href="{{ url('posts') }}">Back to posts</a>
    <div class="page-header">
      <h1>{{ $post->title }}</h1>
    </div>
    <p>This post was created by <strong>{{ $post->user->name }}</strong> , {{ $post->created_at->diffForHumans() }}</p>
    <p class="lead">
      {{ $post->body }}
    </p>
    <div class="btn-group">
      <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
    </div>
    <div class="btn-group">
      {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
