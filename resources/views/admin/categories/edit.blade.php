@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Edição de {{ $category->name }}</h4>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($category, [
                            'route' => [
                                'categories.update',
                                'category' => $category->id
                            ],
                            'class' => 'form',
                            'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name','Nome') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Editar Categoria', ['class' => 'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
