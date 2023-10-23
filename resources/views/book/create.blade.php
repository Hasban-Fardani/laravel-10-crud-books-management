@extends("layout")
@section("content")
  <div class="container mt-3">
    @if ($msg = Session::get("success"))
    <div class="alert alert-success">
      {{ $msg }}
    </div>
    @endif
    <a href="{{ route('books.index') }}" class="btn btn-primary">back</a>
    <h1>Add New Book</h1>
    <div class="row">
      <form action="{{ route('books.store') }}" method="post">
      <label for="" class="form-label">Title</label>
      <input type="text" name="title" class="form-control">

      <label for="" class="form-label">Author</label>
      <input type="text" name="author" class="form-control">

      <label for="" class="form-label">Description</label>
      <textarea name="description" cols="30" rows="10" class="form-control"></textarea>

      <label for="" class="form-label">Genre</label>
      <input type="text" name="genre" class="form-control">

      <label for="" class="form-label">Issued At</label>
      <br>
      <input type="date" name="issued_at">
      <br>

      @csrf
      <button type="submit" class="btn btn-primary mt-2">Add</button>
      </form>
    </div>
  </div>
@endsection