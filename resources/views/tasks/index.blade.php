@extends('layouts.app')



@section('content')
@include('shared/addModal')

  <div class="container pt-5">
    <h4 class="font-weight-bold h4">All Tasks</h4>
    <div class="card-wrapper mt-4">
      @forelse ($tasks as $task)
      @include('shared/editModal')
      <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
          <div class="card-body__left d-flex">
            <div class="card-body__kind mr-3">{{ App\Enums\TaskKind::getDescription($task->kind) }}</div>
            <div class="card-body__memo mr-3">{{ $task->memo }}</div>
          </div>
          <div class="card-body__right d-flex">
            <!-- タスク編集 modal -->
            <button type="button" class="btn card-link edit-btn"  data-toggle="modal" data-target="#editModal_{{ $task->id }}">edit</button>

            <button class="finish-btn btn card-link ml-0" data-id="{{ $task->id }}" >finish</button>
              <form method='POST' id="status_{{ $task->id }}" action="{{ action('TasksController@status', $task) }}" style="display: none">
              @csrf 
              {{ method_field('patch')}}
              </form>
          </div>
        </div>
      </div>
      @empty
        <div>
          <p>さぁ タスク管理を始めましょう！</p>
          <p class="mt-1">「＋」アイコンからタスクを追加してください</p>
        </div>
      @endforelse
    </div>
  </div>
@endsection