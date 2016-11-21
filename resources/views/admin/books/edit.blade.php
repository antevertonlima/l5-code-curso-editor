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
                            @include('admin.books._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
