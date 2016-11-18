@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Criação de Livro</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'books.store', 'class' => 'form']) !!}

                        <div class="form-group">
                            {!! Form::label('title','Nome') !!}
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
                            {!! Form::submit('Criar Livro', ['class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
