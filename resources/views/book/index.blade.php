@extends('layout')
@section('content')
    <div class="container mt-3">
      @if ($msg = Session::get("success"))
      <div class="alert alert-success">
        {{ $msg }}
      </div>
      @endif
        <h1>Book list</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add New</a>
        <div class="row">
            <table class="table">
                <thead>
                    <td>Title</td>
                    <td>Genre</td>
                    <td>Author</td>
                    <td>Action</td>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                <form action="{{ route('books.destroy', $book->id) }}" method="post" onsubmit="confirmDelete('{{$book->title}}')">
                                  <a href="{{ route('books.show', $book->id)}}" class="btn btn-primary">detail</a>
                                  <a href="{{ route('books.edit', $book->id)}}" class="btn btn-warning">edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
      function confirmDelete(title) {
        let answer = confirm("are you sure to delete " + title + " ?")
        if (!answer) {
          event.preventDefault()
        }
      }
    </script>
@endsection
