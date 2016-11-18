@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Criação de Categoria</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

                        <div class="form-group">
                            {!! Form::label('name','Nome') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Criar Categoria', ['class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
