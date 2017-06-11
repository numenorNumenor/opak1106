@extends('master')

@section('title', '| contact')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="page-header">
      <h1>Contact page</h1>
    </div>
     {!! Form::open(['url' => 'pages.contact']) !!}
        <div class="form-group">
          {{ Form::label('subject', 'Subject :') }}
          {{ Form::text('subject', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
          {{ Form::label('message', 'Message :') }}
          {{ Form::textarea('message', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
          {{ Form::submit('Send', array('class' => 'btn btn-success')) }}
        </div>
     {!! Form::close() !!}
  </div>
</div>
@stop
