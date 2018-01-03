@extends('layouts.app')

@section('content')
<div class="container">


@foreach ($News_View as $N)
<div class="jumbotron">
  <p> Athor: {{$N->author_user}} </p>
  <p> Title: {{$N->title}} </p>
  <p> Description: {{$N->description}} </p>
  <p> Category: {{$N->category}} </p>
  <p> Link: {{$N->link}} </p>
  <p> Creation Date: {{$N->pubDate}} </p>
  <a class="navbar-brand" href="rss">
                       RSS
                    </a>
  </div>
  <br>
  @endforeach
</div>
@endsection
