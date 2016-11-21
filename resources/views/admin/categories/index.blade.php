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
                        {!! Button::primary('Nova Categoria')->asLinkTo(route('categories.create')) !!}
                    </span>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    {!!
                     Table::withContents($categories->items())->striped()
                       ->callback('Ações', function ($field, $category) {
                        $linkToEdit = route('categories.edit',['category' => $category->id]);
                        $linkToDestroy = route('categories.destroy',['category' => $category->id]);
                        $deleteForm = "delete-form-{$category->id}";
                        $formDelete = Form::open(['route' => ['categories.destroy','category' => $category->id],'style' => 'display:none','id' => $deleteForm,'method' => 'DELETE']).Form::close();
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
                        {!! $categories->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
