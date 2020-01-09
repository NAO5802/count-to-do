@extends('layouts.app')

@section('content')
  <div class="contents">
    <h1>Blog</h1>
      <ul>
        @forelse ($tasks as $task)
          <li class="task-card">
            {{ App\Enums\TaskKind::getDescription($task->kind) }}：{{ $task->memo }}
              <a href="{{ action('TasksController@edit', $task ) }}">edit</a>
              <a class="finish-btn" data-id="{{ $task->id }}" >finish</a>
              <form method='POST' id="status_{{ $task->id }}" action="{{ action('TasksController@status', $task) }}" style="display: none">
                @csrf 
                {{ method_field('patch')}}
              </form>
          </li>
        @empty
          <li>no task</li>
        @endforelse
    </ul>
  </div>
@endsection