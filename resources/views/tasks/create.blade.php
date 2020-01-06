@extends('layouts.app')

@section('content')
<h1>Task 追加</h1>
<form method="POST" action="{{ action('TasksController@store') }}">
  @csrf
  <ul>
    <li>
      <select name="kind" value="{{  old('kind') }}">
        @foreach($kinds as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
        @if ($errors->has('kind'))
          <span>{{ $errors->first('kind') }}</span>
        @endif
      </select>
    </li>
    <li>
      <textarea type="text" name="memo" placeholder="memo" value="{{ old('memo') }}"></textarea>
    </li>
    <li>
      <input type="submit" value="追加">
    </li>
  </ul>
</form>
@endsection