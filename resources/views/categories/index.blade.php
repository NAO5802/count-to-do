@extends('layouts.app')

@section('content')
<body>
  <div class="contents">
    <h1>Blog</h1>
      <ul>
        @forelse ($names as $name)
        <li><a href="">{{ $name->name }}</a></li>
        @empty
        <li>no data</li>
        @endforelse
    </ul>
  </div>
</body>
@endsection