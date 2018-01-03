@extends('layouts.app')

@section('content')
<div class="container">

    <body>
  
    <div class="jumbotron">
  <h1 class="display-4">Hello!</h1>
  <p>Here you can add news!</p>
  {!! Form::open(['route' => 'add.store']) !!}
  <!-- <form action="/insert" method="post">
  {{ csrf_field()}} -->
<label name="author">Author </label>
<input type="text" class="form-control" name="author_user" id="author" placeholder="{{ Auth::user()->name }}" required>
<label for="title">Title</label>
<input type="text" class="form-control" name="title" id="title" placeholder="Here goes title" required>
<label for="title">Description</label>
<input type="text" class="form-control" name="description" id="title" placeholder="Here goes description" required>
<label for="title">Category</label>
<select id="category_id" name="category_id" class="form-control" required>

  @foreach ($new_cat as $category)
  <option value="{{$category->category_id}}"> {{$category->category}} </option>
  @endforeach
</select>

<label for="title">Link</label>
<input type="text" class="form-control" name="link" id="link" placeholder="Here goes link to news" required><br>

{!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
</div>

</div>
<!-- </form> -->
{!! Form::close()!!}


    </body>
</html>

@endsection