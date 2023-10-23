@extends("layout")
@section("content")
  <div class="container mt-3">
    @if ($msg = Session::get("success"))
    <div class="alert alert-success">
      {{ $msg }}
    </div>
    @endif
    <a href="{{ route('books.index') }}" class="btn btn-primary">back</a>
    <h1>Edit Book</h1>
    <div class="row">
      <form action="{{ route('books.update', $book->id) }}" method="post">
      <label for="" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" value="{{$book->title}}">

      <label for="" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" value="{{$book->author}}">

      <label for="" class="form-label">Description</label>
      <textarea name="description" cols="30" rows="10" class="form-control">{{$book->description}}</textarea>

      <label for="" class="form-label">Genre</label>
      <input type="text" name="genre" class="form-control" value="{{$book->genre}}">

      <label for="" class="form-label">Issued At</label>
      <br>
      <input type="date" name="issued_at" value="{{$book->issued_at}}">
      <br>

      @csrf
      @method("PUT")
      <button type="submit" class="btn btn-primary mt-2">Edit</button>
      </form>
    </div>
  </div>
@endsection