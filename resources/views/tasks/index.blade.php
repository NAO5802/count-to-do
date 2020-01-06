@extends('layouts.app')

@section('content')
<body>
  <div class="contents">
    <h1>Blog</h1>
      <ul>
        @forelse ($tasks as $task)
        <li><a href="">{{ $task }}</a></li>
        @empty
        <li>no data</li>
        @endforelse
    </ul>
  </div>
</body>
@endsection