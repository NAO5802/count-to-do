@extends('layouts.app')

@section('content')
<div class="container pt-5"> 
  <h4 class="font-weight-bold h4">Finised Tasks</h4>
  @if (isset($tasks[0]))
  <p class="mt-3 mb-2 float-right user-label">User name： {{$user->name}}</p>
  <table class="table table-striped mt-3 text-center">
    <thead>
      <tr class="table-header">
        <th class="text-center" scope="col">種類</th>
        <th class="text-center" scope="col">完了回数</th>
      </tr>
    </thead>
    <tbody>
      @foreach (array_map(null, $kinds, $counts) as [$kind, $count])
        <tr>
          <td>{{ App\Enums\TaskKind::getDescription($kind) }}</td>
          <td>{{ $count }} 回</td>
        </tr>
      @endforeach
      <tr class="font-weight-bold h5">
        <td>合計</td>
        <td>{{ count($tasks) }} 回</td>
      </tr>
    </tbody>
  </table>
  @else
    <p class="mt-4">{{$user->name}} さんの完了済みTaskはありません</p>
  @endif
</div>
@endsection