@extends('layouts.app')

@section('content')
   <div class="container">
        <h3 class="text-center"> create a post </h3>
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                <span class="text-danger"> @error('image') {{ $message }}@enderror </span>
            </div>
            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ old('title') }}">
                <span class="text-danger"> @error('title') {{ $message }}@enderror </span>
            </div>
            <div class="mb-3">
                <label for="body">body:</label>
                <textarea class="form-control" rows="5" id="body" name="body">{{ old('body') }}</textarea>
                <span class="text-danger"> @error('body') {{ $message }}@enderror </span>
            </div>
            <div class="mb-3">                
                <select class="form-select" aria-label="Default select example" name="category">                    
                    <option selected="civic">Civic/Government</option>
                    <option value="residential">residential</option>
                    <option value="commercial">commercial</option>
                </select>
                <span class="text-danger"> @error('category') {{ $message }}@enderror </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>  
@endsection