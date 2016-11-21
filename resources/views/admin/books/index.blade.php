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
                        {!! Button::primary('Novo Livro')->asLinkTo(route('books.create')) !!}
                    </span>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    {!!
                     Table::withContents(
                        $books->items()
                     )->striped()
                       ->callback('Ações', function ($field, $book) {
                        $linkToEdit = route('books.edit',['book' => $book->id]);
                        $linkToDestroy = route('books.destroy',['book' => $book->id]);
                        $deleteForm = "delete-form-{$book->id}";
                        $formDelete = Form::open(['route' => ['books.destroy','book' => $book->id],'style' => 'display:none','id' => $deleteForm,'method' => 'DELETE']).Form::close();
                        $btnDelete = Button::link('Excluir')->asLinkTo($linkToDestroy)
                                     ->addAttributes([
                                        'onclick' => "event.preventDefault();document.getElementById(\"{$deleteForm}\").submit();"
                                     ]);
                        return "
                            <ul class=\"list-inline\">
                                <li>".Button::link('Editar')->asLinkTo($linkToEdit)."</li>
                                <li>|</li>
                                <li>".$btnDelete."</li>
                            </ul>
                        ".$formDelete;
                       })
                    !!}
                    <div class="text-center">
                        {!! $books->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
