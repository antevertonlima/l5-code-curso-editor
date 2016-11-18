@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="pull-left">
                        <h4>Listagem de Categorias</h4>
                    </span>
                    <span class="pull-right">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
                    </span>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <a href="{{ route('categories.edit',['category' => $category->id]) }}">Editar</a>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <?php $deleteForm = "delete-form-{$category->id}"; ?>
                                            <a href="{{ route('categories.destroy',['category' => $category->id]) }}"
                                               onclick="event.preventDefault();document.getElementById('{{$deleteForm}}').submit();">Excluir</a>
                                               {!! Form::open([
                                                'route' => [
                                                    'categories.destroy',
                                                    'category' => $category->id
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
                        {!! $categories->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
