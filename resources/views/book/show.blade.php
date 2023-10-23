@extends("layout")
@section("content")
  <div class="container mt-3">
    <div class="row">
      <a href="{{ route('books.index') }}" class="btn btn-primary col-2">Kembali</a>
      <h1>{{ $book->title }}</h1>
      <table class="table">
        <tr>
          <td>Author</td>
          <td>{{ $book->author }}</td>
        </tr>

        <tr>
          <td>Description</td>
          <td>{{ $book->description }}</td>
        </tr>

        <tr>
          <td>Genre</td>
          <td>{{ $book->genre }}</td>
        </tr>

        <tr>
          <td>Issued At</td>
          <td>{{ $book->issued_at }}</td>
        </tr>

        <tr>
          <td colspan="2">
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit Book</a>
          </td>
        </tr>

      </table>
    </div>
  </div>
@endsection