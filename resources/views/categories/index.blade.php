<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Count ToDo</title>
  <link href="/css/style.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/style.js"></script>
</head>
<body>
  <div class="container">
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