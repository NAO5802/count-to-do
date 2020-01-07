@extends('layouts.app')

@section('content')
<h1>Task 編集</h1>
<form method="POST" action="{{ action('TasksController@update', $task) }}">
  @csrf
  {{ method_field('patch') }}
  <ul>
    <li>
      <select name="kind">
        @foreach($kinds as $key => $value)
            <option value="{{ $key }}" @if(old('kind', $task->kind) == $key) selected @endif >
            {{ $value }}
            </option>
        @endforeach
        @if ($errors->has('kind'))
          <span>{{ $errors->first('kind') }}</span>
        @endif
      </select>
    </li>
    <li>
      <textarea type="text" name="memo" placeholder="memo"> {{ old('memo', $task->memo) }}</textarea>
    </li>
    <li>
      <input type="submit" value="Update">
    </li>
  </ul>
</form>
@endsection