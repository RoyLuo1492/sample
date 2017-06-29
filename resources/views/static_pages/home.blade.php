@extends('layouts.default')
@section('title','主页')
@section('content')
<div class="jumbotron">
  <h1>Hello Laravel</h1>
  <p class="lead">
    你现在看到的是 <a href="https://fsdhub.com/books/laravel-essential-traning-5.1">Laravelr入门教程</a>的实例项目主页。
  </p>
  <p>
    一切从这里开始
  </p>
  <p>
    <a class="btn btn-lg btn-success" href="{{ route('signup')}}" role="button">现在注册</a>
  </p>
</div>
@stop
