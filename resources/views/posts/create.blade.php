@extends('master')

@section('title', '| Create')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>Create page</h1>
    </div>
     {!! Form::open(['route' => 'posts.store']) !!}
        <div class="form-group">
          {{ Form::label('title', 'Title :') }}
          {{ Form::text('title', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
          {{ Form::label('body', 'Body :') }}
          {{ Form::textarea('body', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
          {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
        </div>
     {!! Form::close() !!}
  </div>
</div>
@stop
