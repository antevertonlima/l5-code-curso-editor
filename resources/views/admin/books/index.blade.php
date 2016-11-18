@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="pull-left">
                        <h4>Listagem de Livros</h4>
                    </span>
                    <span class="pull-right">
                        <a href="{{ route('books.create') }}" class="btn btn-primary">Novo Livro</a>
                    </span>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Sub-Titulo</th>
                                <th>Preço</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->subtitle }}</td>
                                <td>{{ $book->price }}</td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <a href="{{ route('books.edit',['book' => $book->id]) }}">Editar</a>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <?php $deleteForm = "delete-form-{$book->id}"; ?>
                                            <a href="{{ route('books.destroy',['book' => $book->id]) }}"
                                               onclick="event.preventDefault();document.getElementById('{{$deleteForm}}').submit();">Excluir</a>
                                               {!! Form::open([
                                                'route' => [
                                                    'books.destroy',
                                                    'book' => $book->id
                                                ],
                                                'style' => 'display:none',
                                                'id' => $deleteForm,
                                                'method' => 'DELETE']) !!}
                                                {!! Form::close() !!}
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {!! $books->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
