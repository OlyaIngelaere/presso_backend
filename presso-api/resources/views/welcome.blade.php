@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container justify-content-center">
    <ul class="navbar-nav flex-row gap-3">
      <li class="nav-item border rounded px-3 py-2">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item border rounded px-3 py-2">
        <a class="nav-link" href="{{ url('/questions') }}">Questions</a>
      </li>
      <li class="nav-item border rounded px-3 py-2">
        <a class="nav-link" href="{{ url('/answers') }}">Answers</a>
      </li>
    </ul>
  </div>
</nav>
@endsection