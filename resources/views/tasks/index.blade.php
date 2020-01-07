@extends('layouts.app')

@section('content')
  <div class="contents">
    <h1>Blog</h1>
      <ul>
        @forelse ($tasks as $task)
        <li>
          {{ $task->kind }}：{{ $task->memo }}
          <a href="{{ action('TasksController@edit', $task ) }}">edit</a>
        </li>
        @empty
        <li>no data</li>
        @endforelse
    </ul>
  </div>
@endsection