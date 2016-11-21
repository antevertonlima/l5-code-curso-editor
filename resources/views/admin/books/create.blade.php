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
                            @include('admin.books._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
