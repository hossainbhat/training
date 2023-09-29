<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name') }} | @yield('title') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('frontend.layouts._layout.style')
</head>
<body>

<div class="container">
  @include('frontend.layouts._layout.header')
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    @yield('content')
</div>

</body>
</html>
