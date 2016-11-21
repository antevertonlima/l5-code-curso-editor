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
                            @include('admin.categories._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
