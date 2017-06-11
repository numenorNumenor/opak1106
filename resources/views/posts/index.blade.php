@extends('master')

@section('title', 'All posts')

@section('content')
<div class="row">
  <div class="col-md-12">
    <a class="btn btn-success" href="{{ url('posts/create') }}">Create new</a>
    <div class="page-header">
      <h1>All posts</h1>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>title</th>
          <th>body</th>
          <th>created at</th>
          <th>Author</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>
              {{ substr($post->body, 0, 90) }}
              {{ strlen($post->body) > 90 ? "..." : "" }}
            </td>
            <td>{{ $post->created_at->diffForHumans() }}</td>
            <td>{{ $post->user->name }}</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post->id) }}">Edit</a>
              </div>
              <div class="btn-group">
                <a class="btn btn-default btn-sm" href="{{ route('posts.show', $post->id) }}">Show</a>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="text-center">
      {{ $posts->links() }}
    </div>
  </div>
</div>
@stop
