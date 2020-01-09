@extends('layouts.app')

@section('content')
<h1>Task 完了回数</h1>
    <table border="1">
      @if ($tasks)

        @foreach (array_map(null, $kinds, $counts) as [$kind, $count])
        <tr>
            <th>{{ App\Enums\TaskKind::getDescription($kind) }}</th>
            <td>{{ $count }}回</td>
        </tr>
        @endforeach
        <tr>
          <th>合計</th>
          <td>{{ count($tasks) }}回</td>
        </tr>
      @else
        <span>no task</span>
      @endif
    </table>
@endsection