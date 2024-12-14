@extends('layout.app')

@section('content')

<h1 class="text-center">Books Catalog</h1>
<br>
<div class="container row row-cols-2 justify-content-center">
@forelse ($books as $b)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$b->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$b->author}}</h6>
      <p class="card-text">{{$b->description}}</p>
      <h6 class="card-subtitle mb-2 text-primary">Price: {{$b->price}}</h6>
      <h6 class="card-subtitle mb-2 text-warning">Stock: {{$b->stock}}</h6>
      <h6 class="card-subtitle mb-2 text-success">Release Date: {{$b->release_date}}</h6>
      <a href="#" class="btn btn-warning">Edit</a>
      <a href="#" class="btn btn-danger">Delete</a>
    </div>
  </div>
@empty
    <p class="alert alert-warning">No Book data is detected</p>
@endforelse

</div>
@endsection
