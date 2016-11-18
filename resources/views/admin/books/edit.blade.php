@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Edição de {{ $book->title }}</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($book, [
                            'route' => [
                                'books.update',
                                'book' => $book->id
                            ],
                            'class' => 'form',
                            'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('title','Titulo') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('subtitle','Sub-Titulo') !!}
                            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('price','Preço') !!}
                            {!! Form::text('price', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Editar Livro', ['class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
