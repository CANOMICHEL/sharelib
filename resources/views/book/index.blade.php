@extends('base')
@section('content')
  <div class="col-sm-8">
    <div class="col-xs-12">
      <h1 class="page-header text-center">Repositorio de libros online</h1>
    </div>
    @include('partials.info')
    <table class="table table-hover table striped">
      <thead>
        <tr>
          <th width="20px">ID</th>
          <th>Título</th>
          <th>Año</th>
          <th>Autor</th>
          <th colspan="1">&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        @foreach($books as $book)
          <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->tittle }}</td>
            <td>{{ $book->year}}</td>

            @foreach($authors as $author)
              @if($book->author_id==$author->id)
                <td>{{ $author->name }}</td>
              @endif
            @endforeach
            <td>
              <a href="#" title="Ver" class="btn btn-link">
                <span class="glyphicon glyphicon-eye-open"></span>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! $books->render() !!}
  </div>

  <div class="col-sm-4">
    @include('partials.aside')
  </div>
@endsection
