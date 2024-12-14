@extends('layout.app')

@section('content')
<br><br>
<div class="container shadow rounded p-3">
<form action="{{route('book.create')}}" method="POST">
    @csrf
    <h1>Create Book Data</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name')}}">
    </div>
    @error('name')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror

    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="description" value="{{old('description')}}" >
    </div>
    @error('description')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="author"  value="{{old('author')}}">
    </div>

    @error('author')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price"  value="{{old('price')}}">
    </div>
    @error('price')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="stock"  value="{{old('stock')}}">
    </div>
    @error('stock')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Release Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="release_date"  value="{{old('release_date')}}">
    </div>
    @error('release_date')
    <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
